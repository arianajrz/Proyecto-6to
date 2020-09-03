<script>
    $(document).ready(function() {
		$('select').material_select();
    });

	 
</script>

	<div class="row">
	  <div class="col s11  cyan darken-3">
	  	<font color="White" face="Impact">
		<h5 class="center-align">Agregar Uniforme</h5>
		</font>
	  </div>
	</div>

	<form class = "col s12 center-align" method="post" action="?controller=Invent&action=GuardarUniforme">
		<div class = "row">
			<div class = "input-field col s10">
				<input placeholder = "Prenda" name="prenda"  id = "nombre" type = "text" class = "active validate" required />
				<label for = "prenda"><b>Prenda</b></label>
			</div>
		</div>
		<div class = "row">
			<div class = "input-field col s10">
				
				<input placeholder = "Talla" name="talla"  id = "talla" type = "text" class = "active validate" required />
				<label for = "talla"><b>Talla</b></label>
			</div>
		</div>

		<div class = "row">
			<div class = "input-field col s10">
				
				<input placeholder = "Precio" name="precio"  id = "precio" type = "text" class = "active validate" required />
				<label for = "precio"><b>Precio</b></label>
			</div>
		</div>

		<div class = "row">
			<div class = "input-field col s10">
				
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