<script>
    $(document).ready(function() {
		$('select').material_select();
    });
	 
</script>

	<div class="row">
	  <div class="col s11  cyan darken-3">
	  	<font color="White" face="Impact">
		<h5 class="center-align">Agregar Libro</h5>
		</font>
	  </div>
	</div>

	<form class = "col s12 center-align" method="post" action="?controller=Inver&action=GuardarLibro">
		<div class = "row">
			<div class = "input-field col s12">
				
				<input placeholder = "Nombre Libro" name="nombre"  id = "nombre" type = "text" class = "active validate" required />
				<label for = "nombre"><b>Nombre Libro</b></label>
			</div>
		</div>
		<div class = "row">
			<div class = "input-field col s6">
				
				<input placeholder = "Materia" name="materia"  id = "talla" type = "text" class = "active validate" required />
				<label for = "materia"><b>Materia</b></label>
			</div>
		
			<div class = "input-field col s6">
				
				<input placeholder = "Grado" name="grado"  id = "grado" type = "text" class = "active validate" required />
				<label for = "grado"><b>Grado</b></label>
			</div>
		</div>

		<div class = "row">
			<div class = "input-field col s12">
				
				<input placeholder = "Autor" name="autor"  id = "autor" type = "text" class = "active validate" required />
				<label for = "autor"><b>Autor</b></label>
			</div>
		</div>

		<div class = "row">
			<div class = "input-field col s12">
				
				<input placeholder = "Editorial" name="editorial"  id = "editorial" type = "text" class = "active validate" required />
				<label for = "editorial"><b>Editorial</b></label>
			</div>
		</div>

		<div class = "row">
			<div class = "input-field col s6">
				
				<input placeholder = "Precio" name="precio"  id = "precio" type = "text" class = "active validate" required />
				<label for = "precio"><b>Precio</b></label>
			</div>
		
			<div class = "input-field col s6">
				
				<input placeholder = "Cantidad" name="cantidad"  id = "cantidad" type = "text" class = "active validate" required />
				<label for = "cantidad"><b>Cantidad</b></label>
			</div>
		</div>

		<div class="row">
		  <div class="input-field col s10">
			<input type="submit" value="Guardar" class="btn col s12 cyan darken-2">
		  </div>
		</div>
	</form>
