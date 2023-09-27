<?php
/* Smarty version 3.1.47, created on 2023-09-20 15:38:09
  from 'C:\wamp\www\presta\modules\ps_facetedsearch\views\templates\admin\_partials\categories-tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_650af5c18609f8_29954701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9d381b2fc3c60914a913419cb75b4cec27cda0e' => 
    array (
      0 => 'C:\\wamp\\www\\presta\\modules\\ps_facetedsearch\\views\\templates\\admin\\_partials\\categories-tree.tpl',
      1 => 1649947431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650af5c18609f8_29954701 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
  <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories used for this template:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
  <div class="col-lg-9">
    <?php if (trim($_smarty_tpl->tpl_vars['categories_tree']->value) != '') {?>
      <?php echo $_smarty_tpl->tpl_vars['categories_tree']->value;?>

    <?php } else { ?>
      <div class="alert alert-warning">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories selection is disabled because you have no categories or you are in a "all shops" context.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

      </div>
    <?php }?>
  </div>
</div>
<?php }
}
