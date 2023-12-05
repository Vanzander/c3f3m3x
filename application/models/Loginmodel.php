<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Loginmodel extends CI_Model{

     function __construct(){

       parent::__construct();
       $this->load->database();
       
   }
                //user  y  pass
   function lookUsr($data)
   {
       $this->db->select('*');
       $this->db->from('users');
       $this->db->where('mail',$data);

       $query = $this->db->get();
       $query = $query->result_array();
       
       return $query;
       
   }

   function task($eje,$refe,$hr)
   {  
      print_r($eje." -> ".$refe." ".$hr);

      $this->db->select('id_user');
      $this->db->where('nombre',$eje);
      $query = $this->db->get('users');
      $query = $query->result_array();

      $id_capt = $query[0]['id_user'];
      $status = 1;
      $fechaIni = date("Y")."-".date("m")."-".date("d");
      $data = array(
                    'referencia' => $refe,
                    'id_capt' => $id_capt,
                    'fecha' => $fechaIni,
                    'status' => $status,
                    'iniCap' => $hr
                    );
      $this->db->insert('asign',$data);
      //$insert_id = $this->db->insert_id(); // doble insert... ¿wtf?
      redirect('/Tarea/addAs');
   }

   function verifica($data)
   {
      $this->db->select('*');
      $this->db->from("users");
      $this->db->where($data);
      $query = $this->db->get();
      $query = $query->result_array();

     if(!$query)
     {
        print_r("El usuario y/o la contraseña son incorrectos...!");
        header("/index");
      }else{
        $name = $query[0]['nombre'];
        $ape = $query[0]['ape_pat'];
        $usuario = array('usuario'=>$name." ".$ape);
        //return $usuario;
        return $query[0];
        /* $this->session->set_userdata($usuario);
        redirect('/Dashboard/index',$usuario); */
      }

   }

   function createUsr($data){
    $this->db->insert('users',$data);
    return $this->db->insert_id();

    redirect('/verificada');
   }

 }