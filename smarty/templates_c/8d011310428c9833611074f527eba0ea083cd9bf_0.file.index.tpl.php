<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-07 08:45:00
  from 'D:\GitHub\quanlytruonghoc_mvc\views\home\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3d157c2ec055_64810651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d011310428c9833611074f527eba0ea083cd9bf' => 
    array (
      0 => 'D:\\GitHub\\quanlytruonghoc_mvc\\views\\home\\index.tpl',
      1 => 1580718078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3d157c2ec055_64810651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1631104395e3d157c2ce3b9_62644262', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16454603135e3d157c2e22e3_49859864', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/template.tpl");
}
/* {block 'title'} */
class Block_1631104395e3d157c2ce3b9_62644262 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1631104395e3d157c2ce3b9_62644262',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Danh sách sinh viên<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_16454603135e3d157c2e22e3_49859864 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16454603135e3d157c2e22e3_49859864',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="list-content">
        <h1>Quản lý trường học</h1>
        <a href="index.php?controller=home&action=login">Đăng nhập</a>
    </div>
<?php
}
}
/* {/block 'body'} */
}
