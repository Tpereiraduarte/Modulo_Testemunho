<div class="container">
   <form action="<?php echo base_url('Testemunho/page1_name')?>" method="POST" class="md-form"<form >
        <div class="file-field">
          <div class="mb-4">
            <img src="https://image.freepik.com/icones-gratis/user-silhueta-masculina_318-55563.jpg" class="rounded-circle z-depth-1-half avatar-pic">
         </div>

         <div class="md-form">
            <i class="fa fa-user prefix grey-text"></i>
            <input type="text" name="nome_testemunho" value="<?= set_value('nome_testemunho'); ?>" class="form-control">
            <label for="materialFormRegisterNameEx">Digite seu nome</label>
         </div>
          <div class="md-form">
            <i class="fa fa-tag prefix grey-text"></i>
            <input type="text" name="titulo_testemunho" value="<?= set_value('titulo_testemunho'); ?>" class="form-control">
            <label for="materialFormRegisterNameEx">titulo</label>
         </div>
         <div class="md-form">
            <i class="fa fa-calendar prefix grey-text"></i>
            <br>
            <input type="date" name="data_testemunho" value="<?= set_value('data_testemunho'); ?>" class="form-control">
            <label for="materialFormRegisterNameEx">Data</label>
         </div>
         <div class="md-form">
             <i class="fa fa-pencil prefix grey-text"></i>
             <textarea class="form-control rounded-0" name="conteudo_testemunho" value="<?= set_value('conteudo_testemunho'); ?> rows="10"></textarea>
         </div>
          <div class="d-flex justify-content-center">
            <div class="btn btn-primary float-right">
               <span>Escolha uma foto</span>
               <input type="file"name="imagem_testemunho" value="<?= set_value('imagem_testemunho'); ?> ">
            </div>            
         </div>
      </div>
      <div class="text-center mt-4">
         <button class="btn btn-primary" type="submit">Enviar</button>
      </div>
   </form>
</div>