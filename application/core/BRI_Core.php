<?php

namespace BRI;

class BRI_Core
{
    public $secret;
    public $id;

    public function __construct($secret, $id) {
        $this->secret = $secret;
        $this->id = $id;
    }

    public function generateToken()
    {
        $url ="https://sandbox.partner.api.bri.co.id/oauth/client_credential/accesstoken?grant_type=client_credentials";
        $id = $this->id;
        $secret = $this->secret;
        $data = "client_id=$id&client_secret=$secret";
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $json = json_decode($result, true);
        $token = $json['access_token'];

        return $token;
    }
    
    public function generateTimestamp()
    {
        return gmdate("Y-m-d\TH:i:s.000\Z");
    }

    public function generateSignature($path, $verb, $token, $timestamp, $body)
    {
        $payload = "path=$path&verb=$verb&token=Bearer $token&timestamp=$timestamp&body=$body";

        $signPayload = hash_hmac('sha256', $payload, $this->secret, true);
        $base64sign = base64_encode($signPayload);

        return $base64sign;
    }

    public function requestHeader($path, $verb, $payload)
    {
        $timestamp = $this->generateTimestamp();
        $token = $this->generateToken();

        $base64sign = $this->generateSignature($path, $verb, $token, $timestamp, $payload);

        $header = array();
        if ($verb === "GET" || $verb === "DELETE") {
            $header = array(
                "Authorization:Bearer " . $token,
                "BRI-Timestamp:" . $timestamp,
                "BRI-Signature:" . $base64sign,
            );
        } else {
            $header = array(
                "Content-Type:"."application/json",
                "Authorization:Bearer " . $token,
                "BRI-Timestamp:" . $timestamp,
                "BRI-Signature:" . $base64sign,
            );
        }

        return $header;
    }

    public function curlIn($verb, $url, $request_headers, $payload = null)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $request_headers);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        if ($verb !== 'GET') {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $verb);
        }

        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        return $result;
    }
}
