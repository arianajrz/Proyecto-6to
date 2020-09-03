<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-03 02:43:08
  from 'C:\xampp\htdocs\bim4\Proyecto-6to\templates\Master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f503c1ca2faf8_64472632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '153486b060a12b3d967d90ec83b557d7976978fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bim4\\Proyecto-6to\\templates\\Master.tpl',
      1 => 1599093783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/Header.tpl' => 1,
    'file:Menu.tpl' => 1,
    'file:CrearUsuario.tpl' => 1,
    'file:VerUs.tpl' => 1,
    'file:AgregarL.tpl' => 1,
    'file:InventarioL' => 1,
    'file:QuitarL' => 1,
    'file:InventarioU.tpl' => 1,
    'file:AgregarU.tpl' => 1,
    'file:QuitarU.tpl' => 1,
    'file:Cabeceras/Footer.tpl' => 1,
  ),
),false)) {
function content_5f503c1ca2faf8_64472632 (Smarty_Internal_Template $_smarty_tpl) {
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

				<?php if ($_smarty_tpl->tpl_vars['vista']->value == "CrearUsuario") {?>
					<?php $_smarty_tpl->_subTemplateRender('file:CrearUsuario.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == "VerUsuarios") {?>
                     <?php $_smarty_tpl->_subTemplateRender('file:VerUs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == "AgregarLibro") {?>
					<?php $_smarty_tpl->_subTemplateRender('file:AgregarL.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == "VerLibros") {?>
					<?php $_smarty_tpl->_subTemplateRender('file:InventarioL', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == "RetirarLibro") {?>
					<?php $_smarty_tpl->_subTemplateRender('file:QuitarL', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == "VerUniformes") {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:InventarioU.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == "AgregarUniformes") {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:AgregarU.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <?php } elseif ($_smarty_tpl->tpl_vars['vista']->value == "RetirarUniforme") {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:QuitarU.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
