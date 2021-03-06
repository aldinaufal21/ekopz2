<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('daftar_model');
  }

  function index()
  {
    $data['nama'] = "Daftar";
    $this->load->view('login/header_view.php', $data);
    $this->load->view('login/daftar_view.php');
    $this->load->view('login/footer_view.php');
  }

  function daftar_koperasi()
  {
    $data['nama'] = "Daftar Koperasi";
    $this->load->view('login/header_view.php', $data);
    $this->load->view('login/daftar_koperasi_view.php');
    $this->load->view('login/footer_view.php');
  }

  function input_koperasi()
  {
    $nama = $this->input->post('nama');
    $alamat = $this->input->post('alamat');
    $tahun_berdiri = $this->input->post('tahun_berdiri');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $repeat_password = $this->input->post('repeat_password');
    $lat = $this->input->post('lat');
    $long = $this->input->post('long');

    $data = array(
      'id_koperasi' => '',
      'nama' => $nama,
      'badanHukum' => '',
      'thnBerdiri' => $tahun_berdiri,
      'alamat' => $alamat,
      'deskripsi' => '',
      'jumlahAgt' => '',
      'email' => $email,
      'password' => md5($password),
      'rating' => '',
      'lat' => $lat,
      'lng' => $long,
    );

    if (!empty($_FILES['foto']['name'])) {
      $config['upload_path']          = './assets/admin/upload_profile';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['encrypt_name']         = TRUE;
      $config['max_size']             = 2000;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('foto'))
      {
              print_r($this->upload->display_errors());
      }
      else
      {
              $data['foto'] = $this->upload->data('file_name');
      }
    }
    // $this->output->enable_profiler(true);

    if ($password != $repeat_password) {
      $this->daftar_koperasi();
    }
    else {
      $this->daftar_model->input_koperasi($data);

      redirect(base_url('login/koperasi'));
    }
  }

  function input_user()
  {
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $repeat_password = $this->input->post('repeat_password');

    $data = array(
      'id_anggota' => '',
      'id_koperasi' => '',
      'nama' => $nama,
      'jk' => '',
      'ttl' => '',
      'pekerjaan' => '',
      'alamat' => '',
      'foto' => 'user_first.png',
      'email' => $email,
      'password' => md5($password),
      'status' => 'belum_anggota'
    );

    if ($password != $repeat_password)
    {
      $this->index();
    }
    else
    {
      $this->daftar_model->input($data);

      redirect(base_url('login'));
    }
  }

}
