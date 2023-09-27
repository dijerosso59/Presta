<?php
/* Smarty version 3.1.47, created on 2023-09-20 12:00:44
  from 'C:\wamp\www\presta\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_650ac2cca1a724_82696468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c12b29b161cf99c64908cd13c48c9b875886d002' => 
    array (
      0 => 'C:\\wamp\\www\\presta\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1670401941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650ac2cca1a724_82696468 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
