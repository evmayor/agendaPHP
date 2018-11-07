
<?php require RUTA_APP.'/vistas/inc/header.php' ?>
<a href="<?php echo RUTA_URL; ?>/paginas" class="btn btn-light"><i class="fa fa-backward">Volver</i>
</a>


<div class="card card-body bg-light mt-S">
<!--
	<p>tipo:<?php echo $datos['curso_tipo'] ?></p>
-->
	<?php if($datos['curso_tipo']=='1'): ?>
		<h2>Eliminar Curso</h2>

		<!--#######################################-->
		<form action="<?php echo RUTA_URL; ?>/paginas/borrar/<?php echo $datos['curso_id'] ?>" method='POST'>
			<div class="form-group">
				<label for="curso_nombre">Curso: <sup></sup></label>
				<input type="text" 
				name="curso_nombre" 
				class="form-control form-control-lg" 
				value="<?php echo $datos['curso_nombre'] ?>">
			</div>
			<div class="form-group">
				<label for="curso_dia">Dia: <sup></sup></label>
					<select name="curso_dia" 
							id="" 
							class="form-control">
						<?php $lista = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday") ; ?>
						<?php foreach( $lista as $lis): ?>
							<?php if ($datos['curso_dia']==$lis):?>
								<option selected="selected" ><?php echo $lis; ?></option>	
							<?php else: ?>
								<option><?php echo $lis; ?></option>
							<?php endif ?>
						<?php endforeach;?>
					</select>
					
			
			</div>
			<div class="form-group">
				<label for="curso_hora_inicio">Hora Inicio: <sup></sup></label>
				<input class="form-control"
				       type="time" 
				       value="<?php echo $datos['curso_hora_inicio'] ?>"
				       name="curso_hora_inicio" 
				       id="example-time-input">
				
			</div>
<!--			
			<p><?php echo $datos['curso_fecha'] ?></p>
			<p><?php echo $datos['curso_id'] ?></p>
-->		
			
			<input type="hidden" type="text" name="curso_tipo" value="<?php echo $datos['curso_tipo'] ?>">
			<input type="hidden" type="text" name="curso_activo" value="<?php echo $datos['curso_activo'] ?>">
			<input type="hidden" type="text" name="curso_fecha" value="<?php echo $datos['curso_fecha'] ?>">

			<input type="submit" class="btn btn-success" name="Editar Curso" value="Eliminar Curso">
		</form>
		<!--#######################################-->

	<?php else: ?>
		<h2>Eliminar Actividad</h2>

		<!--#######################################-->
		<form action="<?php echo RUTA_URL; ?>/paginas/borrar/<?php echo $datos['curso_id'] ?>" method='POST'>
			<div class="form-group">
				<label for="curso_nombre">Actividad: <sup></sup></label>
				<input type="text" 
				name="curso_nombre" 
				class="form-control form-control-lg" 
				value="<?php echo $datos['curso_nombre'] ?>">
			</div>
			
			<div class="form-group">
				<label for="curso_hora_inicio">Hora Inicio: <sup></sup></label>
				<input class="form-control"
				       type="time" 
				       value="<?php echo $datos['curso_hora_inicio'] ?>"
				       name="curso_hora_inicio" 
				       id="example-time-input">
				
			</div>
			
			<div class="form-group">
				<label for="curso_fecha">Fecha: <sup></sup></label>
				
				<input class="form-control"
				       type="date" 
				       value="<?php echo $datos['curso_fecha'] ?>" 
				       id="example-datetime-local-input" 
				       name="curso_fecha">
			</div>
<!--
			<p><?php echo $datos['curso_fecha'] ?></p>
			<p><?php echo $datos['curso_id'] ?></p>
			
-->		
			<input type="hidden" type="text" name="curso_tipo" value="<?php echo $datos['curso_tipo'] ?>">
			<input type="hidden" type="text" name="curso_activo" value="<?php echo $datos['curso_activo'] ?>">
			<input type="hidden" type="text" name="curso_dia" value="<?php echo $datos['curso_dia'] ?>">

			<input type="submit" class="btn btn-success" name="Editar Curso" value="Eliminar Actividad">
		</form>
		<!--#######################################-->


	<?php endif; ?>


	
	

<?php require RUTA_APP.'/vistas/inc/footer.php' ?>


<!--
##################################
<form action="<?php echo RUTA_URL; ?>/paginas/borrar/<?php echo $datos['curso_id'] ?>" method='POST'>
		<div class="form-group">
			<label for="curso_nombre">Curso: <sup></sup></label>
			<input type="text" name="curso_nombre" class="form-control form-control-lg" value="<?php echo $datos['curso_nombre'] ?>">
		</div>
		<div class="form-group">
			<label for="curso_dia">Dia: <sup></sup></label>
				<select name="curso_dia" id="" class="form-control">
					<?php $lista = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday") ; ?>
					<?php foreach( $lista as $lis): ?>
						<?php if ($datos['curso_dia']==$lis):?>
							<option selected="selected" ><?php echo $lis; ?></option>	
						<?php else: ?>
							<option><?php echo $lis; ?></option>
						<?php endif ?>
					<?php endforeach;?>
				</select>
				
		
		</div>
		<div class="form-group">
			<label for="curso_hora_inicio">Hora Inicio: <sup></sup></label>
			<input class="form-control"
			       type="time" 
			       value="<?php echo $datos['curso_hora_inicio'] ?>"
			       name="curso_hora_inicio" 
			       id="example-time-input">
			
		</div>
		<div class="form-group">
			<label for="curso_fecha">Fecha: <sup></sup></label>
			
			<input class="form-control" 
					type="datetime-local" 
					value="<?php echo $datos['curso_fecha'] ?>" 
					name="curso_fecha"
					id="example-datetime-local-input" >
		</div>
		<p><?php echo $datos['curso_fecha'] ?></p>
		<p><?php echo $datos['curso_id'] ?></p>
		
		<input type="submit" class="btn btn-success" name="Agregar Usuario" value="Borrar Curso">
	</form>
</div>



####################################



-->