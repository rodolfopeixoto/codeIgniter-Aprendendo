<?php $this->load->view('commons/header'); ?>


 <h1>Fale Conosco</h1>
  <div class="row">
    <div class="col-md-8">
    	<form class="form-horizontal" method="POST" action="">
    		<div class="form-group">
    			<label class="col-md-2 control-label" for="nome">Nome</label>
    			<div class="col-md-8">
    				<input type="text" id="nome" name="nome" placeholder="Nome" class="form-control input-md" required="">
    			</div>
    		</div>
    	</form>
    </div>
  </div>

<?php $this->load->view('commons/footer'); ?>