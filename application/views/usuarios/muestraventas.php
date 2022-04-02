<h1 class="page-header" style="text-align:center;">Listado de pedidos</h1>

<?php if (!$venta) { ?>

	<div class="contenedor">
		<div class="well">
			<h1>No hay Pedidos</h1>
		</div>
	</div>

<?php } else { ?>
<div class="contenedor">
	<div class="row">
		<div class="col-md-12">
			<table  class="table table-bordered table-hover table-dark">
				<thead>
					<th>Número de factura</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Ver</th>
				</thead>
				<tbody> 
					<?php 
					foreach($venta as $row) { ?>
					<tr>
						<td> <?php echo $row->id_vent; ?> </td>
						<td> <?php echo $row->nombre; ?> </td>
						<td> <?php echo $row->apellido; ?> </td>
						<td> <a class="btn btn-success" href="<?php echo base_url("producto_controller/muestra_detalle/$row->id_vent");?>">ver detalle</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>	<?php } ?>
</div>
