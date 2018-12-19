<?php $this->load->view('Header'); ?>
			
          <div class="table-responsive">
             <?php if (isset($msg)): ?>
      <center><div class="alert alert-success" role="alert" style="margin-top: 10px; width: 350px;"><?= $msg; ?></div></center>
    <?php endif; ?>
     <?php if (isset($erro)): ?>
      <center><div class="alert alert-danger" role="alert" style="margin-top: 10px; width: 350px;"><?= $erro; ?></div></center>
    <?php endif; ?>
          	 <a href="<?php echo base_url('CadastrarProduto') ?>"<button type='button' class='btn btn-sm btn-primary'>+ Novo Produto</button></a>
          	  	<br><br>
            <table class="table table-striped">
              <thead>
              	<th>Nome</th>
                <th>Descricao</th>
                <th>Preço</th>

              </thead>
  <?php foreach ($produtos as $p){ ?>
   
     <tr>
       <td><?= $p->nome; ?></td>
       <td><textarea cols="25" rows="3" disabled><?= $p->descricao; ?></textarea></td>
       <td>R$<?= $p->preco; ?></td>
       <td>
     <a href="<?= base_url('Produtos/atualizar_produto/'.$p->id) ?>"<button type='button' class='btn btn-sm btn-primary'>Editar</button></a>
     <a href="<?= base_url('Produtos/excluir_produto/'.$p->id) ?>"<button type='button' onclick="return confirm('Deseja Realmente Excluir?')" class='btn btn-sm btn-danger'>Excluir</button></a>
      </td>
    </tr>
    
    <?php }?>
              <tbody>
                 	
              </tbody>
            </table>
          </div>

        </main>
      </div>
       
     </div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>