<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Pedidos_Model extends CI_Model {

  
 
	   public function listar_pedidos(){
       
      return $this->db->select("*")->get("pedidos")->result();

}

   public function listar_pedidos_cliente(){
       
      return $this->db->select("*")
        ->join("clientes", "pedidos.id_cliente=clientes.id")
        ->get("pedidos")->result();

}

 public function listar_pedidos_produto(){
       
      return $this->db->select("*")
        ->join("produtos", "pedidos.id_produto=produtos.id")
        ->get("pedidos")->result();

}

  public function cadastrar_pedidos($data){
  
  $inserindo = $this->db->insert('pedidos',$data);
      
 if($inserindo === true){
        return true;
      }else{
        return false;
      }
     
  }







}