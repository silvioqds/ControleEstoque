<?php $this->load->view('Header'); ?>
			
          <div class="table-responsive">
           <?php if (isset($msg)): ?>
           <center><div class="alert alert-success" role="alert" style="margin-top: 10px; width: 350px;"><?= $msg; ?></div></center>
           <?php endif; ?>
           <?php if (isset($erro)): ?>
           <center><div class="alert alert-danger" role="alert" style="margin-top: 10px; width: 350px;"><?= $erro; ?></div></center>
           <?php endif; ?>
          	 <a href="<?php echo base_url('CadastrarPedido') ?>"<button type='button' class='btn btn-sm btn-primary'>+ Novo Pedido</button></a>
          	  	<br><br>
            <table class="table table-striped">
              <thead>
              	<th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Produto</th>
                <th>Descricao</th>
                <th>Preço</th>


              </thead>

<!--
  <?php foreach ($pedidos_cliente as $pc){ ?>
    <?php foreach ($pedidos_produto as $pp){ ?>
     <tr>
       <td><?= $pc->nome; ?></td>
       <td><?= $pc->email; ?></td>
       <td><?= $pc->telefone; ?></td>
       <td><?= $pp->nome;?></td>
       <td><?= $pp->descricao; ?></td>
       <td>R$<?= $pp->preco; ?></td>
    </tr>
   --> 
    <?php }}?>
              <tbody>
                 	
              </tbody>
            </table>
          </div>

        </main>
      </div>
       
    </div>


			<div class="col-sm-12">
				<p class="back-link">Create by <a href="#">@Silvio Queiroz</a></p>
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