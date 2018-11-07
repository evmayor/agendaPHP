<?php require RUTA_APP.'/vistas/inc/header.php' ?>

<a href="<?php echo RUTA_URL; ?>/paginas" class="btn btn-light"><i class="fa fa-backward">Volver</i>
</a>


<div class="card card-body bg-light mt-S">

	<!--<p><?php echo $datos['tipo'] ?></p>-->

	<?php if ($datos['tipo']=='curso'): ?>
		<h2>Agregar Curso</h2>

		<!--#######################################-->
		<form action="<?php echo RUTA_URL; ?>/paginas/agregar/0" method='POST'>
			<div class="form-group">
				<label for="curso_nombre">Curso: <sup></sup></label>
				<input type="text" name="curso_nombre" class="form-control form-control-lg">
			</div>
			<div class="form-group">
				<label for="curso_dia">Dia: <sup></sup></label>
				
				<select multiple class="form-control" id="exampleSelect2" name="curso_dia">
			      <option>Monday</option>
			      <option>Tuesday</option>
			      <option>Wednesday</option>
			      <option>Thursday</option>
			      <option>Friday</option>
			      <option>Saturday</option>
			      <option>Sunday</option>
			    </select>
				

			</div>
			<div class="form-group">
				<label for="curso_hora_inicio">Hora Inicio: <sup></sup></label>
				<input class="form-control" type="time" value="13:45:00" name="curso_hora_inicio" id="example-time-input">
				
			</div>
			 <input type="hidden" name="curso_tipo" value="1">
			 <input type="hidden" name="curso_fecha" value="">
			 <input type="hidden" name="curso_activo" value="1">
			<input type="submit" class="btn btn-success" name="Agregar Curso" value="Agregar Curso">
		</form>
		<!--#######################################-->


	<?php else: ?>
		<h2>Agregar Actividad</h2>
		<!--#######################################-->
		<form action="<?php echo RUTA_URL; ?>/paginas/agregar/0" method='POST'>
			<div class="form-group">
				<label for="curso_nombre">Actividad: <sup></sup></label>
				<input type="text" name="curso_nombre" class="form-control form-control-lg">
			</div>

			<div class="form-group">
				<label for="curso_hora_inicio">Hora Inicio: <sup></sup></label>
				<input class="form-control" type="time" value="13:45:00" name="curso_hora_inicio" id="example-time-input">
				
			</div>
			<div class="form-group">
				<label for="curso_fecha">Fecha: <sup></sup></label>
				
				<input class="form-control"
				       type="date" 
				       value="2011-08-19T13:45:00" 
				       id="example-datetime-local-input" 
				       name="curso_fecha">
			</div>

			<input type="hidden" type="text" name="curso_tipo" value="0">
			<input type="hidden" type="text" name="curso_dia" value="">
			<input type="hidden" type="text" name="curso_activo" value="1">

			<input type="submit" class="btn btn-success" name="Agregar Actividad" value="Agregar Actividad">
		</form>
		<!--#######################################-->

	

	<?php endif; ?>

	
	
</div>

<?php require RUTA_APP.'/vistas/inc/footer.php' ?>


<!--
<form action="<?php echo RUTA_URL; ?>/paginas/agregar" method='POST'>
		<div class="form-group">
			<label for="curso_nombre">Curso: <sup></sup></label>
			<input type="text" name="curso_nombre" class="form-control form-control-lg">
		</div>
		<div class="form-group">
			<label for="curso_dia">Dia: <sup></sup></label>
			
			<select multiple class="form-control" id="exampleSelect2" name="curso_dia">
		      <option>Monday</option>
		      <option>Tuesday</option>
		      <option>Wednesday</option>
		      <option>Thursday</option>
		      <option>Friday</option>
		      <option>Saturday</option>
		      <option>Sunday</option>
		    </select>
			

		</div>
		<div class="form-group">
			<label for="curso_hora_inicio">Hora Inicio: <sup></sup></label>
			<input class="form-control" type="time" value="13:45:00" name="curso_hora_inicio" id="example-time-input">
			
		</div>
		<div class="form-group">
			<label for="curso_fecha">Fecha: <sup></sup></label>
			
			<input class="form-control"
			       type="datetime-local" 
			       value="2011-08-19T13:45:00" 
			       id="example-datetime-local-input" 
			       name="curso_fecha">
		</div>
		<input type="submit" class="btn btn-success" name="Agregar Usuario">
	</form>



-->