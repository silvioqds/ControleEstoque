<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Clientes_Model extends CI_Model {
 
	

   public function listar_clientes(){

       $query = $this->db->get('clientes');
       return $query->result();

}

  public function cadastrar_clientes($nome, $data){
     

      $this->db->where('nome',$nome);
      $query = $this->db->get('clientes');

      if($query->num_rows() == 1){
        return false;
      }else{
        $inserindo = $this->db->insert('clientes',$data);
      }
 if($inserindo === true){
        return true;
      }else{
        return false;
      }
     
  }

  public function excluir_clientes($id){
     
       $this->db->where('id',$id);
       $query = $this->db->delete('clientes');
       return $query;
  }

    public function atualizar_clientes($id){
      
       $this->db->where('id',$id);
       $consulta = $this->db->get('clientes')->result();
       return $consulta;
  
    }

    public function atualizacao($id,$data){

      $this->db->where('id',$id);
      $atualizando = $this->db->update('clientes',$data);

      if($atualizando === true){
        return true;
      }else{
        return false;
      }
    }


    public function pesquisar($pesq){
      

      $this->db->select('*');
      $this->db->like('nome',$pesq);
      return $this->db->get('clientes')->result();
     

    }







}