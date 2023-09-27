<?php
/* Smarty version 3.1.47, created on 2023-09-20 11:56:28
  from 'C:\wamp\www\presta\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_650ac1cc86e9d8_23995412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bd1dbeea19e78d4112c481e075e3615f8704b89' => 
    array (
      0 => 'C:\\wamp\\www\\presta\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1670401941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650ac1cc86e9d8_23995412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\wamp\\www\\presta\\var\\cache\\dev\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\6b\\d1\\db\\6bd1dbeea19e78d4112c481e075e3615f8704b89_2.file.helpers.tpl.php',
    'uid' => '6bd1dbeea19e78d4112c481e075e3615f8704b89',
    'call_name' => 'smarty_template_function_renderLogo_609702551650ac1cc863c64_93698919',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_609702551650ac1cc863c64_93698919 */
if (!function_exists('smarty_template_function_renderLogo_609702551650ac1cc863c64_93698919')) {
function smarty_template_function_renderLogo_609702551650ac1cc863c64_93698919(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_609702551650ac1cc863c64_93698919 */
}
