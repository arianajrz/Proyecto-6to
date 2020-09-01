<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-02 01:10:13
  from 'C:\xampp\htdocs\bim4\Proyecto-6to\templates\CrearUsuario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4ed4d5962238_28929119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a43107b5a5712d5be8e99ee8b35d26f645b6405' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bim4\\Proyecto-6to\\templates\\CrearUsuario.tpl',
      1 => 1599001785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4ed4d5962238_28929119 (Smarty_Internal_Template $_smarty_tpl) {
?>script>
    $(document).ready(function() {
		$('select').material_select();
    });
<?php echo '</script'; ?>
>

	<div class="row">
	  <div class="col s11  cyan darken-3">
	  	<font color="White" face="Impact">
		<h5 class="center-align">Crear Usuario</h5>
		</font>
	  </div>
	</div>

	<form class = "col s12 center-align" method="post" action="?controller=User&action=GuardarUsuario">
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

		<div class = "row">
			<div class = "input-field col s10">
				<i class = "material-icons prefix">date_range</i>
				<label for="Icon_date"><b>Fecha de Nacimiento</b></label>
				<input name="fecha" type="date" placeholder = "Fecha" class="datepicker" id="date">
			</div>
		</div>

		<div class = "row">
			<div class = "input-field col s12">
				<i class = "material-icons prefix">person_pin</i>
				<input placeholder = "Nombre de Usuario" name="usuario"  id = "usuario" type = "text" class = "active validate" required />
				<label for = "usuario">Usuario</label>
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
				<input placeholder = "Password de Usuario" name="RePass"  id = "RePass" type = "password" class = "active validate" required />
				<label for = "RePass"><b>Rep.Password</b></label>
			</div>
		</div>
		

		<div class="row">
		  <div class="input-field col m10">
			<input type="submit" value="CREAR" class="btn col s12 cyan darken-2">
		  </div>
		</div>


	</form><?php }
}
