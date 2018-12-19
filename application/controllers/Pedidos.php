<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {
   
     public function __construct(){

   	    parent::__construct();
        $this->load->model('Produtos_Model','produtos'); // Carregando Model produtos
        $this->load->model('Clientes_Model','clientes'); // Carregando Model Clientes
   	    $this->load->model('Pedidos_Model','pedidos'); // Carregando Model pedidos
   }

	public function index(){
    // $dados['pedidos'] = $this->pedidos->listar_pedidos();
    // $dados['pedidos_cliente'] = $this->pedidos->listar_pedidos_cliente();
    // $dados['pedidos_produto'] = $this->pedidos->listar_pedidos_produto();
    $this->load->view('Pedidos'/*,$dados*/);
	}
    
    public function carregar_cadastro(){
    $dados['clientes'] = $this->clientes->listar_clientes();
    $dados['produtos'] = $this->produtos->listar_produtos(); 
	  $this->load->view('Cadastrar_pedido',$dados);
}

    public function cadastrar_pedidos($redirecionar = 'Pedidos'){
    	  
           
    if($this->input->post()) {
          $data = array(
                'id_produto' => $this->input->post('idproduto'),
                'id_cliente'=> $this->input->post('idcliente')  
            ); 

          $insert = $this->pedidos->cadastrar_pedidos($data);
       

           if($insert === true){
              redirect($redirecionar);
           }else{
           	  $dados['pedidos'] = $this->pedidos->listar_pedidos();
           	  $dados['msg'] = "Impossivel Cadastrar";
           	  $this->load->view('Cadastrar_pedido',$dados);
           }
          
    }
         
}


}
	

