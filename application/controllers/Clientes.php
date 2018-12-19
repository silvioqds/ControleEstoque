<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {
   
     public function __construct(){

   	    parent::__construct();

   	    $this->load->model('Clientes_Model','clientes'); // Carregando Model clientes
   }

	public function index(){
    $dados['clientes'] = $this->clientes->listar_clientes();
		$this->load->view('Clientes',$dados);
	}
    
    public function carregar_cadastro(){

	  $this->load->view('Cadastrar_cliente');
}

    public function cadastrar_clientes($redirecionar = 'clientes'){
    	  
           
    if($this->input->post()) {
          $data = array(
                'nome' => $this->input->post('nome'),
                'email'=> $this->input->post('email'),  
                'telefone' => $this->input->post('telefone')
            ); 

          $insert = $this->clientes->cadastrar_clientes($nome,$data);
       

           if($insert === true){
              redirect($redirecionar);
           }else{
           	  $dados['clientes'] = $this->clientes->listar_clientes();
           	  $dados['msg'] = "Impossivel Cadastrar";
           	  $this->load->view('Cadastrar_clientes',$dados);
           }
          
    }
         
}


	 public function atualizar_cliente($id=null){
       
       $id = $this->uri->segment(3);
       $dados['cliente'] = $this->clientes->atualizar_clientes($id);  
       $this->load->view('Atualizar_cliente',$dados);
}
 
    public function atualizacao(){
       

       $id = $this->input->post('id');
        $data = array(
                'nome' => $this->input->post('nome'),
                'email'=> $this->input->post('email'),
                'telefone' => $this->input->post('telefone')
               
      ); 

       $atualizacao = $this->clientes->atualizacao($id,$data);

       if($atualizacao){
       	  $dados['clientes'] = $this->clientes->listar_clientes();
          $dados['msg'] = "Cliente Atualizado com Sucesso";
          $this->load->view('Clientes',$dados);
       }else{
       	 $dados['clientes'] = $this->clientes->listar_clientes();
         $dados['erro'] = "Não foi possivel editar clientes";
         $this->load->view('Cadastrar_clientes',$dados);
       }

    }

      public function excluir_cliente($id=null){
       
        
       $id = $this->uri->segment(3);
       $excluir = $this->clientes->excluir_clientes($id); 

       if($excluir === true){
       	     $dados['clientes'] = $this->clientes->listar_clientes();
           	 $dados['msg'] = "clientes Excluido com Sucesso";
           	 $this->load->view('Clientes',$dados);
           }else{
           	  $dados['clientes'] = $this->clientes->listar_clientes();
           	   $dados['erro'] = "Não foi possivel Excluir";
           	  $this->load->view('Clientes',$dados);
           }

}


    public function pesquisar(){

    	$pesq = $this->input->post('pesquisar');

        $dados['clientes'] = $this->clientes->pesquisar($pesq);

        if($dados['clientes']){
        $this->load->view('Clientes',$dados);
        }else{
          $dados['clientes'] = $this->clientes->listar_clientes();
          $this->load->view('Clientes',$dados);
        }
    }

}
	

