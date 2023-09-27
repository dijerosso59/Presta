<?php
/* Smarty version 3.1.47, created on 2023-09-20 15:37:09
  from 'C:\wamp\www\presta\admin185kpx8wi\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_650af585ceb577_54986983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '391802c60cb3a20858b6e2fc76332d704f9c480f' => 
    array (
      0 => 'C:\\wamp\\www\\presta\\admin185kpx8wi\\themes\\default\\template\\content.tpl',
      1 => 1670401941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650af585ceb577_54986983 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
