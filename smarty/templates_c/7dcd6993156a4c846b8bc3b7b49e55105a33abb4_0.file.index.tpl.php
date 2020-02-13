<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-04 07:44:22
  from 'D:\GitHub\crud_mvc_quanlytruonghoc\views\home\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3912c6ba5496_86102230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dcd6993156a4c846b8bc3b7b49e55105a33abb4' => 
    array (
      0 => 'D:\\GitHub\\crud_mvc_quanlytruonghoc\\views\\home\\index.tpl',
      1 => 1580718078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3912c6ba5496_86102230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12422975045e3912c6b5a7f4_25039056', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2577964785e3912c6ba0365_81976609', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/template.tpl");
}
/* {block 'title'} */
class Block_12422975045e3912c6b5a7f4_25039056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12422975045e3912c6b5a7f4_25039056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Danh sách sinh viên<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_2577964785e3912c6ba0365_81976609 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2577964785e3912c6ba0365_81976609',
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
