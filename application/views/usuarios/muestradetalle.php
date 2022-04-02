<div class="contenedor">
<!-- Page Heading/Breadcrumbs -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header" style="text-align:center;">Listado de pedidos</h1>
		</div>
	</div>
<!-- /.row -->
	<div class="row">
		<table  class="table table-bordered table-hover table-dark">
			<thead>
				
				<th>Número de factura</th>
				<th>Descripción</th>
				<th>Cantidad</th>
				<th>Precio</th>
				<th>Subtotal</th>
			</thead>
			
			<tbody>
				<?php
				$gran_total = 0;?>
				<?php foreach($cart as $row) { ?>
				<tr>

					<td> <?php echo $row->id; ?> </td>
					<td> <?php echo $row->descripcion; ?> </td>
					<td> <?php echo $row->cantidad; ?> </td>
					

					<td> <?php echo $row->precio; ?> </td>
					<td> <?php echo $row->total; ?> </td>
					
					
				</tr>
				<?php $gran_total = $gran_total + $row->total; ?>
				<?php } ?>
				<tr>
                    <td>
                        <b>Total: $
                            <?php //Gran Total
                            echo number_format($gran_total, 2); 
                            ?>
                        </b>
                    </td>
                    </tr> 
			</tbody>
		</table>
	</div>
</div>

			