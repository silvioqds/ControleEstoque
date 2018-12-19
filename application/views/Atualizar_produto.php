

<?php $this->load->view('Header');  ?>

		
          <div class="table-responsive">
            <table class="table table-striped">
              <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
        

       <!--   <section class="row text-center placeholders">
            <div class="col-9 col-sm-10 placeholder">
              <img src="img/wino.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
              <h4>GOKU</h4>
              <div class="text-muted">IDOLO</div>
            </div>
          </section>-->

        <h2>Atualizar Produto</h2>
        <div class="table-responsive">
         <table class="table table-striped">
<?php foreach($produto as $p) {?>
<form method="POST" action="<?php echo base_url('Produtos/atualizacao')  ?>">
<div class="form-group col-md-10">
  <input type="hidden" name="id" value="<?= $p->id; ?>">
    <div class="form-group col-md-7">
      <label for="nome">Nome</label>
     <input type="input" name="nome" class="form-control" placeholder="Nome" required autofocus value="<?= $p->nome; ?>">
    </div>
    
    <div class="form-group col-md-7">
     <textarea cols="35" rows="5" class="form-group" name="descricao" placeholder="Descrição..."><?= $p->descricao; ?></textarea>
</div>

    <div class="form-group col-md-7">
      <label for="preco">Preço</label>
      <input type="text" class="form-control" name="preco" placeholder="Preco" required value="<?= $p->preco; ?>">
</div>

  
  </div>
  <div class="form-group col-md-5">
  <button type="submit" class="btn btn-primary">Atualizar</button>
  </div>
  </div>
<?php }?>

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


			
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="http://localhost/ControleEstoque/js/jquery-1.11.1.min.js"></script>
	<script src="http://localhost/ControleEstoque/js/bootstrap.min.js"></script>
	<script src="http://localhost/ControleEstoque/js/chart.min.js"></script>
	<script src="http://localhost/ControleEstoque/js/chart-data.js"></script>
	<script src="http://localhost/ControleEstoque/js/easypiechart.js"></script>
	<script src="http://localhost/ControleEstoque/js/easypiechart-data.js"></script>
	<script src="http://localhost/ControleEstoque/js/bootstrap-datepicker.js"></script>
	<script src="http://localhost/ControleEstoque/js/custom.js"></script>

		
</body>
</html>