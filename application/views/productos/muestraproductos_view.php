<?php if (!$productos) { ?>

	<div class="contenedor">
		<div class="well">
			<br><br>
			<h1>No hay Productos</h1>
		</div>
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			<a type="button" class="btn btn-success" href="<?php echo base_url('productos_agrega'); ?>">Agregar</a>
			<a type="button" class="btn btn-danger" href="<?php echo base_url('muestraeliminados'); ?>">ELIMINADOS</a>
			<br> <br>
		<?php } ?>	
	</div>

<?php } else { ?>

	<div class="contenedor">
		<div class="well">
			<br><br>
			<h1>Todos los Productos</h1>
		</div>	
		<a type="button" class="btn btn-success" href="<?php echo base_url('productos_agrega'); ?>">Agregar</a>
		<a type="button" class="btn btn-danger" href="<?php echo base_url('muestraeliminados'); ?>">ELIMINADOS</a>
		<br> <br>
		<table class="table table-bordered table-hover table-dark">
			<thead>
				<tr>
					<th>ID</th>
					<th>Descripcion</th>
					<th>Categoria</th>
					<th>Precio Venta</th>
					<th>Stock</th>
					<th>Imagen</th>
					<th>Eliminado</th>
					<th>Modificar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos->result() as $row)
				{ 
					$imagen = $row->imagen;	?>
					<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->descripcion;  ?></td>
					<td><?php echo $row->categoria_id;  ?></td>
					<td><?php echo $row->precio_venta;  ?></td>
					<td><?php echo $row->stock;  ?></td>
				     <td><img height="80px" src="<?php echo $imagen; ?>"/></td>
					<td><?php echo $row->eliminado;  ?></td>
					<td><a style="color: white" href="<?php echo base_url("productos_modifica/$row->id");?>">Modificar</a> | <a style="color: white"  href="<?php echo base_url("productos_elimina/$row->id");?>">Eliminar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>	            
	</div>

<?php } ?>
