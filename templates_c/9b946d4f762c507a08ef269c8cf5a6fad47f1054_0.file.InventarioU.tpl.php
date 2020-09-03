<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-03 02:39:45
  from 'C:\xampp\htdocs\bim4\Proyecto-6to\templates\InventarioU.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f503b51da5d27_27865653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b946d4f762c507a08ef269c8cf5a6fad47f1054' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bim4\\Proyecto-6to\\templates\\InventarioU.tpl',
      1 => 1599092396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f503b51da5d27_27865653 (Smarty_Internal_Template $_smarty_tpl) {
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
		<h5 class="center-align"> Inventario General de Uniformes </h5>
    </font>
	  </div>
	</div>

	<form class ="col s11 center-align" method="post" action="?controller=User&action=VerUniformes">

		<table class="responsive-table">
            <thead>
              <tr>
                  <th><font color="Black"><b>Prenda</b></font></th>
                  <th><font color="Black"><b>Talla</b></font></th>
                  <th><font color="Black"><b>Precio</b></font></th>
                  <th><font color="Black"><b>Cantidad</b></font></th>
              </tr>
            </thead>

            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dato']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
                  <tr>
                    <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Prenda'];?>
 </b></td>
                    <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Talla'];?>
 </b></td>
                    <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Precio'];?>
 </b></td>
                    <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Cantidad'];?>
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
