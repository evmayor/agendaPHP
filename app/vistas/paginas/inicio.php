<?php require RUTA_APP.'/vistas/inc/header.php' ?>

<div class="row">
		
	<div id="hora">
        
    </div>
</div>


<div class="row">
	<!--##################################################-->
	<!--##############TABLA CURSOS########################-->
	<!--##################################################-->


	<div class="tb col-sm-6">
		<h3 class="text-center">Cursos</h3>
		<table id="tabla" class="table" >
			<thead>
				<tr>
					
					<th>Curso</th>
					<th>Dia</th>
					<th>Hora</th>
					<!--<th>Fecha</th>-->
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($datos['cursos'] as $cursos): ?>		
				<tr>
					<!--<td><?php echo $cursos->curso_id; ?></td>-->
					
					<td><?php echo $cursos->curso_nombre; ?></td>
					<td><?php echo $cursos->curso_dia; ?></td>
					<td class="hora_inicio"><?php echo $cursos->curso_hora_inicio; ?></td>
					<!--<td><?php echo $cursos->curso_fecha; ?></td>-->
					<td><a href="<?php echo RUTA_URL; ?>/paginas/editar/<?php echo $cursos->curso_id; ?>">Editar</a></td>
					<td><a href="<?php echo RUTA_URL; ?>/paginas/borrar/<?php echo $cursos->curso_id; ?>">Borrar</a></td>
					<td><input type="hidden" value="<?php echo $cursos->curso_tipo; ?>" id="curso_tipo"></td>
				</tr>
			
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<!--##################################################-->
	<!--##############TABLA ACTIVIDADES###################-->
	<!--##################################################-->
	<div class="col-sm-6">
		<h3 class="text-center">Actividades</h3>
		<table id="tabla" class="table">
			<thead>
				<tr>
					<th>Actividad</th>
					<th>Fecha</th>
					<th>Hora </th>
					
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach($datos['actividades'] as $cursos): ?>		
				<tr>
					
					<td><?php echo $cursos->curso_nombre; ?></td>
					
					<td><?php echo $cursos->curso_fecha; ?></td>
					<td class="hora_inicio"><?php echo $cursos->curso_hora_inicio; ?></td>
					
					<td><a href="<?php echo RUTA_URL; ?>/paginas/editar/<?php echo $cursos->curso_id; ?>">Editar</a></td>
					<td><a href="<?php echo RUTA_URL; ?>/paginas/borrar/<?php echo $cursos->curso_id; ?>">Borrar</a></td>
					<td><input type="hidden" value="<?php echo $cursos->curso_tipo; ?>" id="curso_tipo"></td>

				</tr>
			
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>


<?php require RUTA_APP.'/vistas/inc/footer.php' ?>
	