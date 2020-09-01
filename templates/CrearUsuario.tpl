script>
    $(document).ready(function() {
		$('select').material_select();
    });
</script>

	<div class="row">
	  <div class="col s11  cyan darken-3">
	  	<font color="White" face="Impact">
		<h5 class="center-align">Crear Usuario</h5>
		</font>
	  </div>
	</div>

	<form class = "col s12 center-align" method="post" action="?controller=Us&action=guardar">
		<div class = "row">
			<div class = "input-field col s10">
				<i class = "material-icons prefix">account_circle</i>
				<input placeholder = "Nombre de Usuario" name="nombre"  id = "nombre" type = "text" class = "active validate" required />
				<label for = "nombre">
				<b>Nombre</b></label>
			</div>
		</div>
		<div class = "row">
			<div class = "input-field col s10">
				<i class = "material-icons prefix">account_circle</i>
				<input placeholder = "Apellido de Usuario" name="apellido"  id = "apellido" type = "text" class = "active validate" required />
				<label for = "apellido"><b>Apellido</b></label>
			</div>
		</div>

		

		<div class = "row">
			<div class = "input-field col s10">
				<i class = "material-icons prefix">date_range</i>
				<label for="Icon_date"><b>Fecha de Nacimiento</b></label>
				<input name="fecha" type="date" placeholder = "Fecha" class="datepicker" id="date">
			</div>
		</div>

		<div class = "row">
			<div class = "input-field col s10">
				<i class = "material-icons prefix">vpn_key</i>
				<input  name="pass"  id = "pass" type = "password" class = "active validate" required />
				<label for = "pass"><b>Password</b></label>
			</div>
		</div>

		<div class = "row">
			<div class = "input-field col s10">
				<i class = "material-icons prefix">vpn_key</i>
				<input placeholder = "Password de Usuario" name="RepPass"  id = "RepPass" type = "password" class = "active validate" required />
				<label for = "RepPass"><b>Rep.Password</b></label>
			</div>
		</div>
		
		<div class = "row">
			<div class = "input-field col s1">
				<i class = "material-icons prefix">people_outline</i>
			</div>
				<div class="col s1">
				<label for="Icon_date"><b>Genero</b></label>
				</div>
				</br>
				<div class="row col s9">
				<select class = "browser-default" name="genero" id="genero" >
					  <option value = "Femenino">Femenino</option>
					  <option value = "Masculino">Masculino</option>
				   </select>
			</div>
		</div>

		<div class="row">
		  <div class="input-field col m10">
			<input type="submit" value="CREAR" class="btn col s12 cyan darken-2">
		  </div>
		</div>


	</form>