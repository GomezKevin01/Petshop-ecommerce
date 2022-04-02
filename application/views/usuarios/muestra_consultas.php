<?php if (!$consulta) { ?>
	<div class="contenedor">
		<div class="well">
			<br><br>
			<h1>No hay consultas</h1>
		</div>
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>		
		<?php } ?>	
	</div>
<?php } else { ?>
	<div class="contenedor">
		<br><br>
			<h1>Todas las Consultas</h1>
		<table class="table table-bordered table-hover table-dark">
			<thead>
				<tr>
					<th>Consulta</th>
					<th>Email</th>
					<th>id consulta</th>	
				</tr>
			</thead>
			<tbody>
				<?php foreach($consulta->result() as $row)
				{ 
						?>
					<tr>

						<td><?php echo $row->consulta;  ?></td>
						<td><?php echo $row->email;  ?></td>
						<td><?php echo $row->id_consulta;  ?></td>					
					<td><a style="color: white" href="<?php echo base_url("eliminar_consulta/$row->id_consulta");?>">Eliminar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>	            
	</div>

<?php } ?>
