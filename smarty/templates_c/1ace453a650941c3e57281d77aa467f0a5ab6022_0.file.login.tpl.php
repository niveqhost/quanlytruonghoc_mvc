<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-04 07:52:18
  from 'D:\GitHub\crud_mvc_quanlytruonghoc\views\home\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3914a2cba546_49926570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ace453a650941c3e57281d77aa467f0a5ab6022' => 
    array (
      0 => 'D:\\GitHub\\crud_mvc_quanlytruonghoc\\views\\home\\login.tpl',
      1 => 1580799126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3914a2cba546_49926570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11767889305e3914a2cafee1_79148833', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7139585455e3914a2cb67d0_76493520', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/template.tpl");
}
/* {block 'title'} */
class Block_11767889305e3914a2cafee1_79148833 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11767889305e3914a2cafee1_79148833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Danh sách sinh viên<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_7139585455e3914a2cb67d0_76493520 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7139585455e3914a2cb67d0_76493520',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <h1 class="text-center login-title">Hệ thống quản lý trường học</h1>
                <div class="account-wall">
                    <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                        alt="">
                    <form class="form-signin">
                    <input type="text" class="form-control" placeholder="Email" required autofocus>
                    <input type="password" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">
                        Sign in</button>
                    <label class="checkbox pull-left">
                        <input type="checkbox" value="remember-me">
                        Ghi nhớ tài khoản
                    </label>
                    <a href="#" class="pull-right need-help">Quên mật khẩu? </a><span class="clearfix"></span>
                    </form>
                </div>
                <a href="#" class="text-center new-account">Tạo tài khoản mới </a>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
