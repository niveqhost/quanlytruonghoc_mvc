<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-31 08:37:29
  from 'D:\GitHub\crud_mvc_quanlytruonghoc\views\mypage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e33d939d4a605_82735557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f64e7936bda28e4767e400c14ac7b40d69733db7' => 
    array (
      0 => 'D:\\GitHub\\crud_mvc_quanlytruonghoc\\views\\mypage.tpl',
      1 => 1580456249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e33d939d4a605_82735557 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1275758475e33d939d30045_76936349', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6368937305e33d939d3a993_27046163', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/template.tpl");
}
/* {block 'title'} */
class Block_1275758475e33d939d30045_76936349 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1275758475e33d939d30045_76936349',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Quản lý trường học<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_6368937305e33d939d3a993_27046163 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6368937305e33d939d3a993_27046163',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
My HTML Page Body goes there<?php
}
}
/* {/block 'body'} */
}
