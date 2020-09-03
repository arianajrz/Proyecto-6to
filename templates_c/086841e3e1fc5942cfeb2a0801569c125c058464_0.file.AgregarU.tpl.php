<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-03 03:00:24
  from 'C:\xampp\htdocs\bim4\Proyecto-6to\templates\AgregarU.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5040287dcf98_26973678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '086841e3e1fc5942cfeb2a0801569c125c058464' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bim4\\Proyecto-6to\\templates\\AgregarU.tpl',
      1 => 1599094803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5040287dcf98_26973678 (Smarty_Internal_Template $_smarty_tpl) {
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
		<h5 class="center-align">Agregar Uniforme</h5>
		</font>
	  </div>
	</div>

	<form class = "col s12 center-align" method="post" action="?controller=User&action=AgregarUniformes">
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
	</form><?php }
}
