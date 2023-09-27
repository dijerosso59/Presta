<?php
/* Smarty version 3.1.47, created on 2023-09-20 15:36:44
  from 'C:\wamp\www\presta\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_650af56c0d1065_48372376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '279bbf37c98d9750e1cfbd6db35b97d473703abc' => 
    array (
      0 => 'C:\\wamp\\www\\presta\\themes\\classic\\templates\\index.tpl',
      1 => 1670401941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_650af56c0d1065_48372376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_217734956650af56c0cb959_58346539', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_914998860650af56c0cc555_87835129 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_419917826650af56c0ce3c2_23102474 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_2007335515650af56c0cd711_01228246 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_419917826650af56c0ce3c2_23102474', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_217734956650af56c0cb959_58346539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_217734956650af56c0cb959_58346539',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_914998860650af56c0cc555_87835129',
  ),
  'page_content' => 
  array (
    0 => 'Block_2007335515650af56c0cd711_01228246',
  ),
  'hook_home' => 
  array (
    0 => 'Block_419917826650af56c0ce3c2_23102474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_914998860650af56c0cc555_87835129', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2007335515650af56c0cd711_01228246', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
