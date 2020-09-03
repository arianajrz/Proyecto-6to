<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-03 03:03:28
  from 'C:\xampp\htdocs\bim4\Proyecto-6to\templates\InventarioLibros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5040e0a19af2_96761510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bc98706c0e07e9337cd5742f4d05c4ea0b45907' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bim4\\Proyecto-6to\\templates\\InventarioLibros.tpl',
      1 => 1599094954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5040e0a19af2_96761510 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h5 class="center-align"> Inventario General de Libros </h5>
    </font>
    </div>
  </div>

  <form class ="col s11 center-align" method="post" action="?controller=User&action=VerLibros">

    <table class="responsive-table">
            <thead>
              <tr>
                  <th><font color="Black"><b>Nombre</b></font></th>
                  <th><font color="Black"><b>Materia</b></font></th>
                  <th><font color="Black"><b>Grado</b></font></th>
                  <th><font color="Black"><b>Autor</b></font></th>
                  <th><font color="Black"><b>Editorial</b></font></th>
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
                    <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Nombre'];?>
 </b></td>
                    <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Materia'];?>
 </b></td>
                    <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Grado'];?>
 </b></td>
                    <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Autor'];?>
 </b></td>
                    <td><b> <?php echo $_smarty_tpl->tpl_vars['d']->value['Editorial'];?>
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
