<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 01:15:41
  from 'C:\xampp\htdocs\bim4\Proyecto-6to\templates\Cabecera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4ae19d2b2624_57620568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1867375efc640f2d859bc76da2592fb842cd7f71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bim4\\Proyecto-6to\\templates\\Cabecera.tpl',
      1 => 1598485651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4ae19d2b2624_57620568 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row blue darken-2">
	<div class=" col s4 " >

		<p class="white-text  "> <strong><b>USUARIO: </b><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</strong> </p>
		<p class="white-text  "> <strong><b>PUESTO: Trabajador  
</strong> </p>
	</div>
	
	<div class=" col s2 push-s3 ">
		<br>
		 <li><a href="?controller=Salir&action=CerrarSesion"> Salir</a></li>
	</div>

	<div class=" col s2 push-s3" >
		<img class="materialboxed " data-caption="Usuario" width="100"  src="Recursos/Img/Logo.png">
	</div>
</div>

<?php }
}
