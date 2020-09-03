<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-03 05:09:02
  from 'C:\xampp\htdocs\bim4\Proyecto-6to\templates\AgregarL.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f505e4e78abd9_12343671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37d33825f7de52aab33bd646de5b887a645adc2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bim4\\Proyecto-6to\\templates\\AgregarL.tpl',
      1 => 1599102515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f505e4e78abd9_12343671 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(document).ready(function() {
		$('select').material_select();
    });
	 
<?php echo '</script'; ?>
>

	<div class="row">
	  <div class="col s11  cyan darken-3">
	  	<font color="White" face="Impact">
		<h5 class="center-align">Agregar Libro</h5>
		</font>
	  </div>
	</div>

	<form class = "col s12 center-align" method="post" action="?controller=Invent&action=GuardarLibro">
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
<?php }
}
