<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Produtos_Model extends CI_Model {
 
	

   public function listar_produtos(){

       $query = $this->db->get('produtos');
       return $query->result();

}

  public function cadastrar_produtos($nome, $data){
     

      $this->db->where('nome',$nome);
      $query = $this->db->get('produtos');

      if($query->num_rows() == 1){
        return false;
      }else{
        $inserindo = $this->db->insert('produtos',$data);
      }
 if($inserindo === true){
        return true;
      }else{
        return false;
      }
     
  }

  public function excluir_produtos($id){
     
       $this->db->where('id',$id);
       $query = $this->db->delete('produtos');
       return $query;
  }

    public function atualizar_produtos($id){
      
       $this->db->where('id',$id);
       $consulta = $this->db->get('produtos')->result();
       return $consulta;
  
    }

    public function atualizacao($id,$data){

      $this->db->where('id',$id);
      $atualizando = $this->db->update('produtos',$data);

      if($atualizando === true){
        return true;
      }else{
        return false;
      }
    }






}