<?php $this->load->view('commons/header'); ?>


 <h1>Trabalhe Conosco</h1>

   <?= form_open_multipart(base_url('trabalhe-conosco'), array("class" => "form-horizontal", "method" => "POST"));
    ?>

   <div class="form-group">
     <div class="col-md-8">
      <?= form_input(array("name"=>"nome","id"=>"nome"),set_value('nome'),array("class"=>"form-control input-md", "required"=>"","type"=>"text","placeholder"=>"Nome")); ?>
      </div>
    </div>

   <div class="form-group">

     <div class="col-md-8">
      <?= form_input(array("name"=>"email","id"=>"email"),set_value('email'),array("class"=>"form-control input-md", "required"=>"","type"=>"email","placeholder"=>"Email")); ?>
      </div>
   </div>


   <div class="form-group">

     <div class="col-md-8">
      <?= form_input(array("name"=>"telefone","id"=>"telefone"),set_value('telefone'),array("class"=>"form-control input-md", "required"=>"","type"=>"text","placeholder"=>"Telefone")); ?>
      </div>
   </div>

   <div class="form-group">
    <div class="col-md-8">
       <?= form_textarea(array('name'=>'mensagem','id'=>'mensagem'),set_value('mensagem'), array('class'=>'form-control input-md', 'required'=>'', 'type' => 'text', 'placeholder' => 'Mensagem'));
       ?>
    </div>
   </div>



   <div class="form-group">

     <div class="col-md-8">
      <?= form_upload(array("name"=>"curriculo","id"=>"curriculo"),set_value('curriculo'),array("class"=>"input-file","required" => "")); ?>
      </div>
   </div>


      <div class="form-group">

     <div class="col-md-8">
      <?= form_submit(array("name"=>"Enviar","id"=>"enviar"),"Enviar",array("class"=> "btn btn-primary pull-right")); ?>
      </div>
   </div>

  <?= form_close(); ?>
<?php $this->load->view('commons/footer'); ?>