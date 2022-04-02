<!--div class="container"-->
<style>
body {
  background-image: url('img/fondo4.jpg');
  color: #fff;
}
</style>
<br><br><br>
<div class="contenedor d-flex justify-content-center">
	
	<!--div class="row"-->

		<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel-heading">
					<figure class="text-center">
                                <img alt="Imagen usuario" src="<?php echo base_url('assets/img/login1.png'); ?>" width="150" height="150">
                            </figure>
                    <h2 class="text-center ">Iniciar Sesión</h2>
                </div>
			
			<?php echo validation_errors(); ?>
			
			<!-- Genera un formulario para loguearse -->
			<div class="form-group ">
							<?php echo form_open('verifico_usuario', ['class' => 'form-signin', 'role' => 'form']); ?> 
							<?php echo form_input(['name' => 'username', 
													'id' => 'username', 
													'class' => 'form-control',
													'placeholder' => 'Usuario', 
													'required'=>'required', 
													'autofocus'=>'autofocus']); ?>
							
							<?php echo form_input(['type' => 'password',
													'name' => 'password', 
													'id' => 'password', 
													'class' => 'form-control',
													'placeholder' => 'Contraseña', 
													'required'=>'required']); ?> <br>
							
							<?php echo form_submit('submit', 'Iniciar sesión',"class='btn btn-lg btn-primary btn-block'"); ?> <br>
							
							<?php echo form_close(); ?>
			</div>
		</div>
	<!--/div-->
</div>
