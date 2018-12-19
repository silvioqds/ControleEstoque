<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {
   
     public function __construct(){

   	    parent::__construct();

   	    $this->load->model('Produtos_Model','produtos'); // Carregando Model produtos
         
   }

	public function index(){
    $dados['produtos'] = $this->produtos->listar_produtos();
		$this->load->view('Produtos',$dados);
	}
    
    public function carregar_cadastro(){

	  $this->load->view('Cadastrar_produto');
}

    public function cadastrar_produtos($redirecionar = 'produtos'){
    	  
           
    if($this->input->post()) {
          $data = array(
                'nome' => $this->input->post('nome'),
                'descricao'=> $this->input->post('descricao'),  
                'preco' => $this->input->post('preco')
            ); 

          $insert = $this->produtos->cadastrar_produtos($nome,$data);
       

           if($insert === true){
              redirect($redirecionar);
           }else{
           	  $dados['produtos'] = $this->produtos->listar_produtos();
           	  $dados['msg'] = "Impossivel Cadastrar";
           	  $this->load->view('Cadastrar_produtos',$dados);
           }
          
    }
         
}


	 public function atualizar_produto($id=null){
       
       $id = $this->uri->segment(3);
       $dados['produto'] = $this->produtos->atualizar_produtos($id);  
       $this->load->view('Atualizar_produto',$dados);
}
 
    public function atualizacao(){
       

       $id = $this->input->post('id');
        $data = array(
               'nome' => $this->input->post('nome'),
                'descricao'=> $this->input->post('descricao'),  
                'preco' => $this->input->post('preco')
               
      ); 

       $atualizacao = $this->produtos->atualizacao($id,$data);

       if($atualizacao){
       	  $dados['produtos'] = $this->produtos->listar_produtos();
          $dados['msg'] = "Produto Atualizado com Sucesso";
          $this->load->view('Produtos',$dados);
       }else{
       	 $dados['produtos'] = $this->produtos->listar_produtos();
         $dados['erro'] = "Não foi possivel editar Produto";
         $this->load->view('Produtos',$dados);
       }

    }

      public function excluir_produto($id=null){
       
        
       $id = $this->uri->segment(3);
       $excluir = $this->produtos->excluir_produtos($id); 

       if($excluir === true){
       	     $dados['produtos'] = $this->produtos->listar_produtos();
           	 $dados['msg'] = "Produto Excluido com Sucesso";
           	 $this->load->view('Produtos',$dados);
           }else{
           	  $dados['produtos'] = $this->produtos->listar_produtos();
           	   $dados['erro'] = "Não foi possivel Excluir";
           	  $this->load->view('Produtos',$dados);
           }

}



}
	

