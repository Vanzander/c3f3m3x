<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Clientesmodel extends CI_Model{

     function __construct(){

       parent::__construct();
       $this->load->database();
       
   }

   function createUsr($data){
    
    $this->db->insert('users',$data);
    return $this->db->insert_id();

    redirect('/Cotizador');
   }

   function lookClientes(){
    $st = 2;
    $this->db->select('*');
    $this->db->where('tipo_usr',$st);
    $this->db->from('users');

    $query = $this->db->get();
    $res = $query->result_array();

    return $res;
   }

   function lookProyectos($data){
    $this->db->select('*');
    $this->db->where('idCliente',$data);
    $this->db->from('proyecto');

    $query = $this->db->get();
    $res = $query->result_array();

    return $res;
   }
        //localiza los lotes
   /* function addUsr()
   {
       $query = $this->db->get('lotes');
       $query = $query->result_array();

       return $query;
   }

   function lookSurface($data){
    $v = trim($data);
    $this->db->select('superficie,precio_mt2');
    $this->db->where('id',$v);
    $this->db->from('lotes');

    $query = $this->db->get();
    $res = $query->result_array();

    return json_encode($res);
   }

   function lookPrice($data){
    $v = trim($data);
    $this->db->select('precio_mt2');
    $this->db->where('lotes_id',$v);
    $this->db->from('lotes_precio');

    $query = $this->db->get();
    $res = $query->result_array();

    return json_encode($res);
   } */

 }