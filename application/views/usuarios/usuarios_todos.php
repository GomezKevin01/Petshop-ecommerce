<?php if (!$usuarios) { ?>

	<div class="contenedor">
		<div class="well">
			<br><br>
			<h1>No hay usuarios</h1>
		</div>
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			<a type="button" class="btn btn-success" href="<?php echo base_url('agregar_usuario'); ?>">Agregar</a>
			<a type="button" class="btn btn-danger" href="<?php echo base_url('usuarios_eliminados'); ?>">ELIMINADOS</a>
			<br> <br>
		<?php } ?>	
	</div>

<?php } else { ?>
	<div class="contenedor">
		<div class="well">
			<br><br>
			<h1>Todos los usuarios</h1>
		</div>	
		<a type="button" class="btn btn-success" href="<?php echo base_url('agregar_usuario'); ?>">Agregar</a>
		<a type="button" class="btn btn-danger" href="<?php echo base_url('usuarios_eliminados'); ?>">Eliminados</a>
		<br> <br>
		<table class="table table-bordered table-hover table-dark ">
			<thead>
				<tr>
					<th>Id usuario</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
					<th>Usuario</th>
					<th>Contraseña</th>
					<th>Perfil id</th>
					<th>Baja</th>					
				</tr>
			</thead>
			<tbody>
				<?php foreach($usuarios->result() as $row)
				{ 
						?>
					<tr>
					<td><?php echo $row->id_usuario;  ?></td>
					<td><?php echo $row->nombre;  ?></td>
					<td><?php echo $row->apellido;  ?></td>
					<td><?php echo $row->email;  ?></td>
					<td><?php echo $row->username;  ?></td>
					<td><?php echo $row->password;  ?></td>
					<td><?php echo $row->perfil_id;  ?></td>				     
					<td><?php echo $row->baja;  ?></td>
					<td><a style="color: white" href="<?php echo base_url("usuario_modifica/$row->id_usuario");?>">Modificar</a> | <a style="color: white" href="<?php echo base_url("usuario_elimina/$row->id_usuario");?>">Eliminar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
         
	</div>

<?php } ?>
