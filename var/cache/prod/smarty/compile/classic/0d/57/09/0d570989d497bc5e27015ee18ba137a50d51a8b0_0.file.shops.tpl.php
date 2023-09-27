<?php
/* Smarty version 3.1.47, created on 2023-09-20 15:38:09
  from 'C:\wamp\www\presta\modules\ps_facetedsearch\views\templates\admin\_partials\shops.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_650af5c18ca103_68716211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d570989d497bc5e27015ee18ba137a50d51a8b0' => 
    array (
      0 => 'C:\\wamp\\www\\presta\\modules\\ps_facetedsearch\\views\\templates\\admin\\_partials\\shops.tpl',
      1 => 1649947431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650af5c18ca103_68716211 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['asso_shops']->value))) {?>
  <div class="form-group">
    <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose shop association:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
    <div class="col-lg-9"><?php echo $_smarty_tpl->tpl_vars['asso_shops']->value;?>
</div>
  </div>
<?php }
}
}
