<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 19:46:45
  from 'C:\xampp\htdocs\bim4\Proyecto-6to\templates\Menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e8905de5977_32843363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1645f701802d56b11b613ab2715494f25350514e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bim4\\Proyecto-6to\\templates\\Menu.tpl',
      1 => 1598982403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e8905de5977_32843363 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
	<div class="collection">
		 <a href="?controller=User&action=CargarOpcion&opcion=GuardarUsuario" class="collection-item black-text"><b>Crear Usuario</b></a>

		 <a href="?controller=Menu&action=CargarOpcion&opcion=VerUsuarios" class="collection-item black-text"><b>Ver Usuarios</b></a>

		 <a href="" class="collection-item black-text"><b> Inventario de Libros </b></a>

		 <a href="" class="collection-item black-text"><b>Inventario Uniforme</b></a>

		 <a href="" class="collection-item black-text"><b>Agregar Libro</b></a>

		 <a href="" class="collection-item black-text"><b> Agregar Uniformes </b></a>

		 <a href="#!" class="collection-item black-text"><b>Quitar Libro </b></a>

		 <a href="#!" class="collection-item black-text"><b>Quitar Uniforme</b></a>
  </div>
</div><?php }
}
