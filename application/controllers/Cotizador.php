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

	public function index()
	{
		$data['lotes'] = $this->Cotizamodel->lookLote();
		$data['desarrollos']=$this->Cotizamodel->lookDesarrollos();
		$data['clientes'] = $this->Clientesmodel->lookClientes();
        $this->load->view('/templates/headerDash',$data);
        $this->load->view('/templates/sidebar');
        $this->load->view('/templates/navbar');
        $this->load->view('/cotizador/clientesRow');
		$this->load->view('/cotizador/cotizaIni');
        $this->load->view('/templates/modalAltaCliente');
		$this->load->view('/templates/modalAltaLote');
        //$this->load->view('footer');
	}

	public function getSurface(){
		$id = $_GET['id'];
		$v1 = $this->Cotizamodel->lookSurface($id);
		echo $v1;
	}

	public function getPrice(){
		$id = $_GET['id'];
		$v1 = $this->Cotizamodel->lookPrice($id);
		echo $v1;
	}

	public function getImgDes(){
		$id = $_GET['id'];
		$v1 = $this->Cotizamodel->lookImg($id);
		echo $v1;
	}

	public function getPrivada(){
		$id = $_GET['id'];
		$v1 = $this->Cotizamodel->lookPrivada($id);
		echo $v1;
	}

	public function printPDF(){
		$data['print'] = $_GET;
		$this->load->view('/templates/makePDF',$data);
	}

	public function addCliente(){
		$data = array (
				'nombre'=>$_POST['nombre'],
				'ape_pat'=>$_POST['apePat'],
				'mail'=>$_POST['email'],
				);
		
		$lookUsr = $this->Loginmodel->lookUsr($data);
		//print_r($lookUsr);die();
        if ($lookUsr != null){  
			//habilitar mensaje el usuario ya existe...
            /* $this->load->view('header');
            $this->load->view('/errors/error');
            $this->load->view('footer'); */
			$this->session->set_flashdata('status_err','El usuario ya se encuentra registrado');
			redirect(base_url().'index.php/Cotizador');
        }else{
            //los datos no se encuentra en la BD, se crea una nueva cuenta
            $data = array(
                'nombre'  => $_POST['nombre'],
                'ape_pat' => $_POST['apePat'],
                'ape_mat' => $_POST['apeMat'],
                'mail' => $_POST['email'],
				'telefono'=>$_POST['tel'],
				'asesor'=>$this->session->userdata('usuario'),
				'tipo_usr'=>'2',
            );
            //$ins = $this->Loginmodel->createUsr($data);
			$cr = $this->Clientesmodel->createUsr($data);

			if($cr){
				
				redirect(base_url().'index.php/Cotizador');
			}
        }
	}

}