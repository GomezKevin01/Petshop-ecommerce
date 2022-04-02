<?php if (!$productos) { ?>

	<div class="contenedor">
		<div class="well">
			<br><br>
			<h1>No hay Eliminados</h1>
		</div>	
	</div>

<?php } else { ?>

	<div class="contenedor">
		<div class="well">
			<br><br>
			<h1>Todos los Eliminados</h1>
		</div>	

		<table class="table table-bordered table-hover table-dark">
			<thead>
				<tr>
					<th>ID</th>
					<th>Descripcion</th>
					<th>Categoria</th>
					<th>Precio Venta</th>
					<th>Stock</th>
					<th>Eliminado</th>
					<th>Modificar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos->result() as $row){ ?>
				<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->descripcion;  ?></td>
					<td><?php echo $row->categoria_id;  ?></td>
					<td><?php echo $row->precio_venta;  ?></td>
					<td><?php echo $row->stock;  ?></td>
					<td><?php echo $row->eliminado;  ?></td>
					<td><a style="color: white" href="<?php echo base_url("productos_modifica/$row->id");?>">Modificar</a> | <a style="color: white" href="<?php echo base_url("productos_activa/$row->id");?>">Activar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>	            
	</div>

<?php } ?>