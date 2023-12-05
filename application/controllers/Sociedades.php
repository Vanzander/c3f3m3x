<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sociedades extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('Loginmodel');
		$this->load->model('Clientesmodel');
		//$this->load->model('Querys');
		$this->load->helper('url');
		$this->load->database('default');
		$this->load->library('session');
		
	}

	public function index()
	{
		$data['usr'] = $this->session->userdata();
		//var_dump("> ",$data['usr']);
		//die();
		if(!$data['usr'] || $data['usr']['id_usr']==null){
			redirect(base_url().'index.php/Login');
		}else{
//tipo usr 1 => Admin  ||   tipo usr 2 => Usuario
			if($data['usr']['tipo_usr']==1){
				if($data['usr']['status']==1){
					$this->load->view('/templates/headerDash',$data);
					$this->load->view('/templates/sidebar');
					$this->load->view('/templates/navbar');
					//$this->load->view('prospectos');
					
					//$this->load->view('dashboard');
					//$this->load->view('rowEarnings');
					//$this->load->view('rowCharts');
					//$this->load->view('rowProyecciones');
                    $this->load->view('/templates/modalLogout');
					$this->load->view('footer');
				}else{
					$this->load->view('/templates/headerDash',$data);
					$this->load->view('/templates/navbar');
					$this->load->view('/errors/badSession');
					$this->load->view('/templates/modalLogout');
					//$this->load->view('dashboard');
					//$this->load->view('rowEarnings');
					//$this->load->view('rowCharts');
					//$this->load->view('rowProyecciones');
					$this->load->view('footer');
				}
			}

			if($data['usr']['tipo_usr']==2){
				if($data['usr']['status']==1){
					$data['proyectos'] = $this->Clientesmodel->lookProyectos($data['usr']['id_usr']);
					if(!$data){
						$this->load->view('/templates/headerDash');
						$this->load->view('/templates/sidebar');
						$this->load->view('/templates/navbar');
						$this->load->view('/errors/error2');
						$this->load->view('footer');	
					}else{
						$this->load->view('/templates/headerDash',$data);
						//$this->load->view('/templates/sidebar');
						$this->load->view('/templates/navbar');
						$this->load->view('crearSociedad');
						
						//$this->load->view('dashboard');
						//$this->load->view('rowEarnings');
						//$this->load->view('rowCharts');
						//$this->load->view('rowProyecciones');
						$this->load->view('/templates/modalLogout');
                        $this->load->view('footer');
					}	
				}else{
					$this->load->view('/templates/headerDash',$data);
					$this->load->view('/templates/navbar');
					$this->load->view('/errors/badSession');
					$this->load->view('footer');	
				}	
			}

			
		}        
	}

	public function logout(){
		foreach($_SESSION as $k => $v){
			unset($_SESSION[$k]);
		}
		redirect(base_url().'index.php/Login');
	}
}