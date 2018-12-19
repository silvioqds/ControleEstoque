


<?php $this->load->view('Header'); ?>

        <h2>Cadastrar Produto</h2>
        <div class="table-responsive">
          <?php if (isset($msg)): ?>
      <center><div class="alert alert-success" role="alert" style="margin-top: 10px; width: 350px;"><?= $msg; ?></div></center>
    <?php endif; ?>
     <?php if (isset($erro)): ?>
      <center><div class="alert alert-danger" role="alert" style="margin-top: 10px; width: 350px;"><?= $erro; ?></div></center>
    <?php endif; ?>
         <table class="table table-striped">

<form method="POST" action="<?php echo base_url('Produtos/cadastrar_produtos')  ?>">
<div class="form-group col-md-10">
  
    <div class="form-group col-md-7">
      <label for="nome">Nome</label>
     <input type="input" name="nome" class="form-control" placeholder="Nome" required autofocus>
    </div><br>
    
    <div class="form-group col-md-7">
      <textarea cols="35" rows="5" class="form-group" name="descricao" placeholder="Descrição..."></textarea>
    </div>


    <div class="form-group col-md-7">
      <label for="Telefone">Preço</label>
      <input type="text" class="form-control" name="preco" placeholder="Preço" required>
</div>

  
  </div>
  <div class="form-group col-md-5">
  <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
  </div>


  <?php if (isset($msg)): ?>
      <center><div class="alert alert-danger" role="alert" style="margin-top: 10px; width: 250px;"><?= $msg; ?></div></center>
    <?php endif; ?>
</form>

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