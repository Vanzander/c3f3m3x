<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Cotizamodel extends CI_Model{

     function __construct(){

       parent::__construct();
       $this->load->database();
       
   }
        //localiza los lotes
   function lookLote()
   {
      $this->db->select('l.*, d.*,p.*');
      $this->db->from('lotes l');
      $this->db->join('desarrollos d','l.desarrollos_id=d.id');
      $this->db->join('privada p','l.privada_id=p.id','left');
    
//       $query = $this->db->get('lotes');
      $query = $this->db->get();
       $query = $query->result_array();

       return $query;
   }

   function lookSurface($data){
    $v = trim($data);
    $this->db->select('superficie,precio_mt2,tipo,desarrollos_id,privada_id');
    $this->db->where('lote_id',$v);
    $this->db->from('lotes');

    $query = $this->db->get();
    $res = $query->result_array();

    return json_encode($res);
   }

   function lookImg($data){
     $v = trim($data);

     $this->db->select('ruta_img');
     $this->db->where('id',$v);
     $this->db->from('desarrollos');

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
   }

   function lookDesarrollos(){
    $query = $this->db->get('desarrollos');
    $query = $query->result_array();

    return $query;
   }

   function lookPrivada($d){
    $v = trim($d);
    $this->db->select('superficie,precio_mt2,tipo,desarrollos_id,privada_id');
    $this->db->where('id',$v);
    $this->db->from('lotes');

    $query = $this->db->get();
    $res = $query->result_array();

    return json_encode($res);
   }

 }