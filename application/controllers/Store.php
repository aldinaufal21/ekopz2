<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once APPPATH.'core/BRI.php';

use BRI\BRI;

class Store extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('store_model');
  }

  function index()
  {
    $data['nama'] = "Home";
    $data['store'] = TRUE;

    $data['barang'] = $this->store_model->tampil_store()->result();

    $this->load->view('landingpage/template/header_store_view', $data);
    $this->load->view('landingpage/store/store_view', $data);
    $this->load->view('landingpage/template/footer_view');
  }

  function product_single($id_barang)
  {
    $data['nama'] = "Product Single";
    $data['product'] = $this->store_model->product_single($id_barang)->row();

    $kategori = $data['product']->kategori;

    $data['related_products'] = $this->store_model->related_products($kategori)->result();

    $this->load->view('landingpage/template/header_store_view',$data);
    $this->load->view('landingpage/store/product_single_view',$data);
    $this->load->view('landingpage/template/footer_view');
  }

  function add_to_cart()
  {
    $id_barang = $_GET['id_barang'];
    $qty = $this->input->post('qty') ? $this->input->post('qty') : 1;
    $data['barang'] = $this->store_model->getBarang($id_barang)->row();
    $data = array(
      'id' => $id_barang,
      'qty' => $qty,
      'price' => $data['barang']->harga_jual,
      'name' => $data['barang']->nama_barang,
    );
    $this->cart->insert($data);
    redirect('/store/cart');
  }

  function kurang_cart()
  {
    $id_barang = $_GET['id_barang'];
    $row_id = $_GET['row_id'];
    $cart = $this->cart->get_item($row_id);
    $qty = $cart["qty"] - 1;
    $data['barang'] = $this->store_model->getBarang($id_barang)->row();
    $data = array(
      'rowid' => $row_id,
      'id' => $id_barang,
      'qty' => $qty,
      'price' => $data['barang']->harga_jual,
      'name' => $data['barang']->nama_barang,
    );

    $this->cart->update($data);
    redirect('/store/cart');
  }

  function cart()
  {
    userlogin();
    $data['nama'] = "Keranjang";
    $id_anggota = $_SESSION['id_anggota'];
    $data['keranjang'] = $this->cart->contents();

    $this->load->view('landingpage/template/header_store_view',$data);
    $this->load->view('landingpage/store/cart_view', $data);
    $this->load->view('landingpage/template/footer_view');
  }

  function hapus_cart()
  {
    $id_barang = $_GET['id_barang'];

    $this->cart->remove($id_barang);
    redirect('/store/cart');
  }

  function checkout()
  {
    $data['nama'] = "Keranjang";

    $this->load->view('landingpage/template/header_store_view',$data);
    $this->load->view('landingpage/store/checkout_view');
    $this->load->view('landingpage/template/footer_view');
  }

  function transaksi()
  {
    $data = $this->input->post();
    $data['total'] = $this->cart->total();
    $data['id_user'] = $_SESSION['id_anggota'];

    $id = $this->store_model->insert_transaksi($data);

    foreach ($this->cart->contents() as $key => $cart) {
      $cartt = [
        'id_transaksi_barang' => NULL,
        'id_transaksi' => $id,
        'id_barang' => $cart['id'],
        'qty' => $cart['qty'],
      ];

      $this->store_model->insert_transaksi_barang($cartt);
    }

    $this->cart->destroy();

    redirect(base_url('store/semua_transaksi/'. $id));
  }

  function status_pembayaran($id_transaksi)
  {
    $data = $this->db->where('id_transaksi', $id_transaksi)->get('transaksi')->row();

    if ($data->status === "dibayar") {
      redirect('store/semua_transaksi');
    }

    $bri = new BRI("nxXGDT85O0gFuYe2", "WkW4sSqJ3S3ydyEv5yF9OHQeYiJwoIyy");
    $institutionCode = "J104408";
    $brivaNo = "77777";
    $custCode = $data->noTelp;
    $nama= $data->nama_depan . ' ' . $data->nama_belakang;
    $amount=$data->total;
    $keterangan="";
    $expiredDate="2017-09-10 09:57:26";

    $datas = array(
      'institutionCode' => $institutionCode ,
       'brivaNo' => $brivaNo,
       'custCode' => $custCode,
       'nama' => $nama,
       'amount' => $amount,
       'keterangan' => $keterangan,
       'expiredDate' => $expiredDate
    );

    $brivaData = json_decode($bri->briva_get($datas));

    if (!$brivaData->status) {
      $bri->briva_create($datas);
      $brivaData = json_decode($bri->briva_get($datas));
    }

    if ($data->total != $brivaData->data->Amount) {
      $bri->briva_update($datas);
      $brivaData = json_decode($bri->briva_get($datas));
    }

    if ($brivaData->data->statusBayar === "N") {
      $bri->briva_update($datas);
      $brivaData = json_decode($bri->briva_get($datas));

      redirect(base_url('Store/status_barang/'.$id_transaksi));
    }

    if ($brivaData->data->statusBayar === "Y") {
      $status_ubah = "dibayar";
      $status = "menunggu pembayaran";

      $this->db->where('id_transaksi', $id_transaksi)->update('transaksi', [
        'status' => $status_ubah,
      ]);

      $datas["amount"] = 0;
      $datas["statusBayar"] = "N";

      $bri->briva_update($datas);
      $bri->briva_update_status($datas);

      redirect(base_url('Store/selesai_pembayaran/'.$id_transaksi));
    }

  }

  public function semua_transaksi($id)
  {
    $data['nama'] = 'Data Transaksi';
    $data['transaksi'] = $this->db->where('id_user', $_SESSION['id_anggota'])->where('id_transaksi', $id)->get('transaksi')->row();

    $this->load->view('landingpage/template/header_store_view',$data);
    $this->load->view('landingpage/store/semua_transaksi_view',$data);
    $this->load->view('landingpage/template/footer_view');
  }

  public function status_barang($id_transaksi)
  {
    $data['nama'] = "Status Barang";
    $id_anggota = $_SESSION['id_anggota'];
    $data['transaksi'] = $this->db->where('id_transaksi', $id_transaksi)->where('id_user', $id_anggota)->get('transaksi')->row();

    $this->load->view('landingpage/template/header_store_view',$data);
    $this->load->view('landingpage/store/status_barang_view',$data);
    $this->load->view('landingpage/template/footer_view');
  }

  public function selesai_pembayaran($id_transaksi)
  {
    $data['nama'] = "Status Barang";
    $id_anggota = $_SESSION['id_anggota'];
    $data['transaksi'] = $this->db->where('id_transaksi', $id_transaksi)->where('id_user', $id_anggota)->get('transaksi')->row();

    $this->load->view('landingpage/template/header_store_view',$data);
    $this->load->view('landingpage/store/selesai_pembayaran_view',$data);
    $this->load->view('landingpage/template/footer_view');
  }
}
