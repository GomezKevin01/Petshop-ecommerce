<style>
body {
  background-image: url('img/fondo.jpg');
  color: #fff;
}
</style>
      <div class="contenedor" class="fondo">
        <h1>Contactos</h1>
      	
          <div class="row mb-5">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="align-self-stretch box text-center p-4">
              
              <div>
                <h3 class="mb-4">Dirección de correo</h3>
                <p><a href="">animalia@gmail.com</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4">
          		
          		<div>
	          		<h3 class="mb-4">Dirección</h3><br>
		            <p>Av. Siempre Viva 2234</p>
		          </div>
	          </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="align-self-stretch box text-center p-4">

          		<div>
	          		<h3 class="mb-4">Número de contacto</h3>
		            <p><a href="">3794007710</a></p>
	            </div>
	          </div>
          </div>                
      </div>
    </div>
   <div class="contenedor">
  <div class="row">
    <div class="col-lg-8">

      <?php echo validation_errors(); ?>
      <!-- Genero el formulario para crear una usuario -->

      <div class="well bs-component form-horizontal">
        <?php echo form_open('verifico_consulta', 
                  ['class' => 'form-group', 'role' => 'form', 'id' => 'form_registro']); ?>
        <fieldset>
          <div class="form-group">
            <label class="col-lg-2 control-label style= height:200px">Consulta:</label>
            <div class="col-lg-10">
              <?php echo form_input(['name' => 'consulta', 
                          'id' => 'consulta', 
                          'class' => 'form-control',
                          'placeholder' => 'Consulta', 
                          'required'=>'required', 
                          'autofocus'=>'autofocus',
                          'value'=>set_value('consulta')]); ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Email:</label>
            <div class="col-lg-10">
              <?php echo form_input(['type'=>'email', 
                          'name' => 'email', 
                          'id' => 'email', 
                          'class' => 'form-control',
                          'placeholder' => 'Email',
                          'pattern="[^@\s]+@[^@\s]+\.[^@\s]+"'=>'pattern="[^@\s]+@[^@\s]+\.[^@\s]+"',
                          'title' =>'El email es invalido', 
                          'required'=>'required',
                          'value'=>set_value('email')]); ?>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-2 control-label">Nombre:</label>
            <div class="col-lg-10">
              <?php echo form_input(['name' => 'nombre', 
                          'id' => 'nombre', 
                          'class' => 'form-control',
                          'placeholder' => 'Nombre', 
                          'required'=>'required',
                          'value'=>set_value('nombre')]); ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Apellido:</label>
            <div class="col-lg-10">
              <?php echo form_input(['name' => 'apellido', 
                          'id' => 'apellido', 
                          'class' => 'form-control',
                          'placeholder' => 'Apellido', 
                          'required'=>'required']); ?>
            </div>
          </div>
          

          


          <div class="col-lg-3 col-lg-offset-4">
            <?php echo form_submit('submit', 'Enviar',"class='btn btn-primary' "); ?> <br><br>
            <?php echo form_reset ('reset', 'Limpiar', "class='btn btn-primary'"); ?>
            <?php echo form_close(); ?>
          </div>
        </fieldset>
      </div>
    </div>
  </div>
</div>    


