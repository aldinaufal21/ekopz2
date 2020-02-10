<?php

namespace BRI;

include_once APPPATH.'core/BRI_Core.php';

class BRI extends BRI_Core
{
    public function __construct($secret, $id) {
        parent::__construct($secret, $id);
    }

    public function cekAkun($accNumber)
    {
        $url = "https://partner.api.bri.co.id/sandbox/v2/inquiry/".$accNumber;
        $path = "/sandbox/v2/inquiry/".$accNumber;
        $verb = "GET";

        $request_headers = $this->requestHeader($path, $verb, "");

        return $this->curlIn($verb, $url, $request_headers);
    }

    public function transfer_saldo($datas)
    {
        $url = "https://partner.api.bri.co.id/sandbox/v2/transfer/internal";
        $path = "/sandbox/v2/transfer/internal";
        $verb = "POST";
        $payload = json_encode($datas, true);
        $request_headers = $this->requestHeader($path, $verb, $payload);
        return $this->curlIn($verb, $url, $request_headers, $payload);
    }

    ////==================================BRIVA================================////
    public function briva_create($datas)
    {
        # code...
        $url = "https://sandbox.partner.api.bri.co.id/v1/briva";
        $path = "/v1/briva";
        $verb = "POST";
        $payload = json_encode($datas, true);
        $request_headers = $this->requestHeader($path, $verb, $payload);
        return $this->curlIn($verb, $url, $request_headers, $payload);
    }

    public function briva_get($datas)
    {
        # code...
        $url ="https://sandbox.partner.api.bri.co.id/v1/briva/".$datas['institutionCode']."/".$datas['brivaNo']."/".$datas['custCode'];
        $path = "/v1/briva/".$datas['institutionCode']."/".$datas['brivaNo']."/".$datas['custCode'];
        $verb = "GET";
        $request_headers = $this->requestHeader($path, $verb, "");
        return $this->curlIn($verb, $url, $request_headers);
    }

    public function briva_update($datas)
    {
        # code...
        $url = "https://sandbox.partner.api.bri.co.id/v1/briva";
        $path = "/v1/briva";
        $verb = "PUT";
        $payload = json_encode($datas, true);
        $request_headers = $this->requestHeader($path, $verb, $payload);
        return $this->curlIn($verb, $url, $request_headers, $payload);
    }

    public function briva_delete($datas)
    {
        # code...
        $url = "https://sandbox.partner.api.bri.co.id/v1/briva";
        $path = "/v1/briva";
        $verb = "DELETE";
        $payload = "institutionCode=".$datas['institutionCode']."&brivaNo=".$datas['brivaNo']."&custCode=".$datas['custCode'];
        $request_headers = $this->requestHeader($path, $verb, $payload);
        return $this->curlIn($verb, $url, $request_headers, $payload);
    }
    //=====BRIVA STATUS====//
    public function briva_get_status($datas)
    {
        # code...
        $url = "https://sandbox.partner.api.bri.co.id/v1/briva/status/".$datas['institutionCode']."/".$datas['brivaNo']."/".$datas['custCode'];
        $path = "/v1/briva/status/".$datas['institutionCode']."/".$datas['brivaNo']."/".$datas['custCode'];
        $verb = "GET";
        $request_headers = $this->requestHeader($path, $verb,"");
        return $this->curlIn($verb, $url, $request_headers);
    }

    public function briva_update_status($datas)
    {
        # code...
        $url = "https://sandbox.partner.api.bri.co.id/v1/briva/status";
        $path = "/v1/briva/status";
        $verb = "PUT";
        $payload = json_encode($datas, true);
        $request_headers = $this->requestHeader($path, $verb,$payload);
        return $this->curlIn($verb, $url, $request_headers,$payload);
    }
    //=====END OF BRIVA STATUS====//

    //=====BRIVA REPORT====//
    public function briva_get_report($datas)
    {
        # code...
        $url ="https://sandbox.partner.api.bri.co.id/v1/briva/report/".$datas['institutionCode']."/".$datas['brivaNo']."/".$datas['startDate']."/".$datas['endDate'];
        $path = "/v1/briva/report/".$datas['institutionCode']."/".$datas['brivaNo']."/".$datas['startDate']."/".$datas['endDate'];
        $verb = "GET";
        $request_headers = $this->requestHeader($path, $verb,"");
        return $this->curlIn($verb, $url, $request_headers);
    }

    public function briva_get_report_time($datas)
    {
        # code...
        $url = "https://sandbox.partner.api.bri.co.id/v1/briva/report_time/".$datas['institutionCode']."/".$datas['brivaNo']."/".$datas['startDate']."/".$datas['startTime']."/".$datas['endDate']."/".$datas['endTime'];
        $path = "/v1/briva/report_time/".$datas['institutionCode']."/".$datas['brivaNo']."/".$datas['startDate']."/".$datas['startTime']."/".$datas['endDate']."/".$datas['endTime'];
        $verb = "GET";
        $request_headers = $this->requestHeader($path, $verb,"");
        return $this->curlIn($verb, $url, $request_headers);
    }
    //=====END OF BRIVA REPORT====//

    ////==================================END OF BRIVA================================////
}
