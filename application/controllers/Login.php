<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('Loginmodel');
		//$this->load->model('Querys');
		$this->load->helper('url');
		$this->load->database('default');
		$this->load->library('session');
		
	}

	public function index()
	{
        $this->load->view('header');
		$this->load->view('Loginview');
        $this->load->view('footer');
	}
//el check permite verificar si la cuenta existe
    public function check(){
        $data = array(
            'mail' => $_POST['emailUsr'],
            'pwd' => $_POST['pwdUsr'],
        );

        $data['usr'] = $this->Loginmodel->verifica($data);

        //var_dump($data['usr']);die();

        if(!empty($data['usr'])){

           /* $dataSes = array(
                'usuario'=>$data['usr']
            );
           */
            $this->session->set_userdata($data['usr']);
            //$this->session->userdata("idNotaria")  //devuelve idNotaria desde la variable de sesión...
            //var_dump($this->session->userdata("idNotaria"));
		    //die();
            
            redirect('/Dashboard/');
        }else{
            echo "No se reconoce el usuario y/o la contraseña";
        }
     
    }
//create para nuevos usuarios sin cuenta, validar si el mail ya existe
    public function create(){
        $this->load->view('header');
		$this->load->view('register');
        $this->load->view('footer');
    }
//si el mail no se encuentra en la tabla usrs, crea usuario, caso contrario debe enviar mensaje...
    public function makeUsr(){
        //$this->load->model('');
        /*$v1 = $_POST['mailUsr'];
        $mail = $this->Loginmodel->lookUsr($v1);
        print_r($mail);
        exit();*/
        if (!isset($_POST['mailUsr']) || !isset($_POST['rfcUsr']) || !isset($_POST['ape_pat']) || !isset($_POST['pwdUsr'])){
            $this->load->view('header');
            $this->load->view('/errors/error');
            $this->load->view('footer');
        }else{
            
            $mail = $this->Loginmodel->lookUsr($_POST['mailUsr']);
            //el mail no se encuentra en la BD, se crea una nueva cuenta
            if(!$mail){
                $data = array(
                    'nombre'  => $_POST['nombreUsr'],
                    'ape_pat' => $_POST['ape_pat'],
                    'ape_mat' => $_POST['ape_mat'],
                    'mail' => $_POST['mailUsr'],
                    'rfc' => $_POST['rfcUsr'],
                    'pwd' => $_POST['pwdUsr'],
                );
                $ins = $this->Loginmodel->createUsr($data);
            }else{
                $this->load->view('header');
                $this->load->view('/errors/error');
                $this->load->view('footer');
            }
        }
               
    }

    public function verificada(){
        $this->load->view('header');
        $this->load->view('created');
        $this->load->view('footer');
    }
}