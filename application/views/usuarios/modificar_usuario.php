<div class="container">
<div class="col-sm-10 col-md-10">
	<div class="well">
		<br><br>
		<h1>Modificar Datos</h1>	
		
	</div>	            

	<?php echo form_open_multipart("verifico_modificausuario/$id_usuario", ['class' => 'form-signin', 'role' => 'form']); ?>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Nombre:', 'nombre'); ?>	
					<?php echo form_input(['name' => 'nombre', 
													'id_usuario' => 'nombre', 
													'class' => 'form-control',
													'placeholder' => 'Nombre', 
													'value'=>"$nombre"]); ?>
					<?php echo form_error('nombre'); ?>
				</div>
			</div>
						<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Apellido:', 'apellido'); ?>	
					<?php echo form_input(['name' => 'apellido', 
													'id_usuario' => 'apellido', 
													'class' => 'form-control',
													'placeholder' => 'Apellido', 
													'value'=>"$apellido"]); ?>
					<?php echo form_error('apellido'); ?>
				</div>
			</div>

		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Email:', 'email'); ?>
					<?php echo form_input(['name' => 'email', 
													'id_usuario' => 'email', 
													'class' => 'form-control',
													'placeholder' => 'Email',
													'pattern="[^@\s]+@[^@\s]+\.[^@\s]+"'=>'pattern="[^@\s]+@[^@\s]+\.[^@\s]+"',
                          'title' =>'El email es invalido',
													'value'=>"$email"]); ?>
					<?php echo form_error('email'); ?>
				</div>
			</div>
				   		<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Usuario:', 'username'); ?>
					<?php echo form_input(['name' => 'username', 
													'id_usuario' => 'username', 
													'class' => 'form-control',
													'placeholder' => 'Usuario',
													'value'=>"$username"]); ?>
					<?php echo form_error('username'); ?>
				</div>
			</div>
		</div>
		<div class="row">

			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Contraseña:', 'password'); ?>
					<?php echo form_input(['name' => 'password', 
													'id_usuario' => 'password', 
													'class' => 'form-control',
													'placeholder' => 'Contraseña',
													'title' =>'La contraseña debe contener al menos 6 digitos', 
													'pattern=".{6,}"'=>'pattern=".{6,}"',
													'value'=>"$password"]); ?>
					<?php echo form_error('password'); ?>
				</div>
			</div>
						<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Perfil_id:', 'perfil_id'); ?>
					<?php echo form_input(['name' => 'perfil_id', 
													'id_usuario' => 'perfil_id', 
													'class' => 'form-control',
													'placeholder' => 'perfil_id',
													'value'=>"$perfil_id"]); ?>
					<?php echo form_error('perfil_id'); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Baja:', 'baja'); ?>
					<?php echo form_input(['name' => 'baja', 
													'id_usuario' => 'baja', 
													'class' => 'form-control',
													'placeholder' => 'Baja',
													'value'=>"$baja"]); ?>
					<?php echo form_error('baja'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<br>					
					<?php echo form_submit('modificar', 'Modificar',"class='btn btn-lg btn-warning btn-block'"); ?>
				</div>		
			</div>
		</div>

	</div>
</div>			
			
	<?php echo form_close(); ?>

