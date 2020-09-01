<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-01 18:41:43
  from 'C:\xampp\htdocs\bim4\Proyecto-6to\templates\Master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4e79c73da7a4_75560541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '153486b060a12b3d967d90ec83b557d7976978fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bim4\\Proyecto-6to\\templates\\Master.tpl',
      1 => 1598978448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Menu.tpl' => 1,
    'file:CrearUsuario.tpl' => 1,
    'file:VerUs.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_5f4e79c73da7a4_75560541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Cabeceras/Header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titulo'=>'Home'), 0, false);
?>
    <?php if (isset($_smarty_tpl->tpl_vars['e']->value)) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['men']->value)) {?>
            <h4 class="center-align blue"><?php echo $_smarty_tpl->tpl_vars['men']->value;?>
</h4>
        <?php }?>
        
            <div class="row">
            <div class="col s4">
            <?php $_smarty_tpl->_subTemplateRender("file:Menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="col s8">

				<?php if ($_smarty_tpl->tpl_vars['vista']->value == "GuardarUsuario") {?>
					<?php $_smarty_tpl->_subTemplateRender('file:CrearUsuario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == "VerUsuarios") {?>
                     <?php $_smarty_tpl->_subTemplateRender('file:VerUs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == '') {?>
					<?php $_smarty_tpl->_subTemplateRender('', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

					<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == "CrearProducto") {?>
					<?php $_smarty_tpl->_subTemplateRender('', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

					<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == '') {?>
					<?php $_smarty_tpl->_subTemplateRender('', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

					<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == '') {?>
                    <?php $_smarty_tpl->_subTemplateRender('', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

					
					<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == '') {?>

					<?php } else { ?>
						
					<?php }?>

			</div>

                
            </div>       
            </div>
        </div><br>
    <?php }
$_smarty_tpl->_subTemplateRender('file:Cabeceras/Footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
