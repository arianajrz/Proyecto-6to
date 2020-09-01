<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 18:42:14
  from 'C:\xampp\htdocs\bim4\Proyecto-6to\templates\Cabecera.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e79e6ab2c41_69968799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1867375efc640f2d859bc76da2592fb842cd7f71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bim4\\Proyecto-6to\\templates\\Cabecera.tpl',
      1 => 1598978448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e79e6ab2c41_69968799 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <!-- add css style -->
     <style>

    .b img {
      width:100px;
      height: 100px;
      border-radius: 20%;
     
     } 

     .c{
       background-image: url(Recursos/Img/Encabezado.jpg); 
     }

    .breadcrumb {
      background-color:Black;
      background-size:cover;
     } 
     </style>

    
   <div class=" c row ">
	<div class="  col s4 " >
		<p class="white-text"> <strong><b>USUARIO: </b><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</strong> </p>
		<p class="white-text"> <strong><b>PUESTO: Trabajador </b></strong> </p>
	</div>
	
	<div class=" v col s2 push-s6 ">
		<br>
		<br>
		<br>
		<a href="?controller=Salir&action=CerrarSesion" class="breadcrumb">Salir</a>
		 
	</div>
</div>

<?php }
}
