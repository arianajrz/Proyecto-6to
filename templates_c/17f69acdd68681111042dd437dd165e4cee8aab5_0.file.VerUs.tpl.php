<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 19:46:47
  from 'C:\xampp\htdocs\bim4\Proyecto-6to\templates\VerUs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e89076ead92_50062977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17f69acdd68681111042dd437dd165e4cee8aab5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bim4\\Proyecto-6to\\templates\\VerUs.tpl',
      1 => 1598979994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4e89076ead92_50062977 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(document).ready(function() {
		$('select').material_select();
    });

 <!-- add css style -->

     <style>

    
     </style>
    
	 
<?php echo '</script'; ?>
>

	<div class="row">
	  <div class="col s11  cyan darken-3">
    <font color="White" face="Impact">
		<h5 class="center-align">Usuarios</h5>
    </font>
	  </div>
	</div>

	<form class ="col s11 center-align" method="post" action="?controller=User&action=VerUsuarios">

		<table>
            <thead>
              <tr>
                  <th><font color="Black"><b>Nombre</b></font></th>
                  <th><font color="Black"><b>Apellido</b></font></th>
                  <th><font color="Black"><b>Género</b></font></th>
                  <th><font color="Black"><b>Fecha de Nac</b></font></th>
                  <th><font color="Black"><b>Usuario</b></font></th>
                  <th><font color="Black"><b>Contraseña</b></font></th>
              </tr>
            </thead>


            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dato']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
                  <tr>
                    <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Nombre'];?>
 </b></td>
                    <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Apellido'];?>
 </b></td>
                    <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Género'];?>
 </b></td>
                    <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Fecha de Nac'];?>
 </b></td>
                    <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Usuario'];?>
 </b></td>
                    <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Contraseña'];?>
 </b></td>
                  </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
      </table>
	</form>
<?php }
}
