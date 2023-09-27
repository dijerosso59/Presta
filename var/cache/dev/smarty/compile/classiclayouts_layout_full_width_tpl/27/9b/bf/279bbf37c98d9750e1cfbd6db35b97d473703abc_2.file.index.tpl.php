<?php
/* Smarty version 3.1.47, created on 2023-09-20 14:09:10
  from 'C:\wamp\www\presta\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_650ae0e686b453_07754052',
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
function content_650ae0e686b453_07754052 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1059826784650ae0e6865d33_56265953', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1739719194650ae0e6866985_72352251 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1555640405650ae0e68686d0_66723213 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_317347102650ae0e6867bb4_23956932 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1555640405650ae0e68686d0_66723213', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1059826784650ae0e6865d33_56265953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1059826784650ae0e6865d33_56265953',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1739719194650ae0e6866985_72352251',
  ),
  'page_content' => 
  array (
    0 => 'Block_317347102650ae0e6867bb4_23956932',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1555640405650ae0e68686d0_66723213',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1739719194650ae0e6866985_72352251', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_317347102650ae0e6867bb4_23956932', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
