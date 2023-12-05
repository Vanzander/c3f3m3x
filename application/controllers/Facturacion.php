<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cotizador extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('Cotizamodel');
		$this->load->model('Clientesmodel');
		$this->load->model('Loginmodel');
		//$this->load->model('Querys');
		$this->load->helper('url');
		$this->load->database('default');
		$this->load->library('session');
		
	}

    function testCon($rfc,$url,$apiKey,$usr,$pwd){
        $aData = array();
        $aData = array('Solicitud' => array('rfc'  => $rfc,
                                            'accion' => 'probarConexion'));

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url.'probarConexion');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

        $sDataJson =  json_encode($aData);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $sDataJson);

        $nContentLenght = strlen($sDataJson);

        curl_setopt($ch, CURLOPT_HEADER, 0);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'x-api-key: ' . $apiKey,
            'Content-Length: ' . $nContentLenght
        ));

        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, "{$usr}:{$pwd}");

        $sOutput = curl_exec($ch);
        curl_close($ch);

        $return = json_decode($sOutput);
        return $return->AckEnlaceFiscal;
    }

    public function saldo($rfc,$url,$apiKey,$usr,$pwd){
        $aData = array();
        $aData = array('Solicitud' => array('rfc'  => $rfc,
                                            'accion' => 'obtenerSaldo'));

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url.'obtenerSaldo');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

        $sDataJson =  json_encode($aData);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $sDataJson);

        $nContentLenght = strlen($sDataJson);

        curl_setopt($ch, CURLOPT_HEADER, 0);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'x-api-key: ' . $apiKey,
            'Content-Length: ' . $nContentLenght
        ));

        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, "{$usr}:{$pwd}");

        $sOutput = curl_exec($ch);
        curl_close($ch);
        $return = json_decode($sOutput);
        return $return->AckEnlaceFiscal->saldo;
    }

}


?>