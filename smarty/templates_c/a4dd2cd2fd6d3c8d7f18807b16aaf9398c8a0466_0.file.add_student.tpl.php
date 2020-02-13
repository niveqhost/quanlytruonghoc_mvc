<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-04 08:01:10
  from 'D:\GitHub\crud_mvc_quanlytruonghoc\views\admin\add_student.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3916b6cce799_68969599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4dd2cd2fd6d3c8d7f18807b16aaf9398c8a0466' => 
    array (
      0 => 'D:\\GitHub\\crud_mvc_quanlytruonghoc\\views\\admin\\add_student.tpl',
      1 => 1580799662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3916b6cce799_68969599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14262268165e3916b6caa8b2_89588418', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7914764395e3916b6cb18c4_13203782', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/template.tpl");
}
/* {block 'title'} */
class Block_14262268165e3916b6caa8b2_89588418 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14262268165e3916b6caa8b2_89588418',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Thêm sinh viên<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_7914764395e3916b6cb18c4_13203782 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7914764395e3916b6cb18c4_13203782',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper" class="d-flex flex-column">
        <div class="container-fluid">
            <h1 class="text-center">Thêm thông tin sinh viên</h1>
            <div class="text-danger">
                <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                <?php }?>
            </div>
            <div class="row">
                <form action="index.php?controller=admin&action=addstudent" method="post" class="my-update-form">
                    <div class="form-group">
                        <label for="inputStudentCode">Mã sinh viên</label>
                        <input type="text" class="form-control" id="inputStudentCode" name="studentcode">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentName">Tên sinh viên</label>
                        <input type="text" name="fullname" class="form-control" id="inputStudentName">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentBirthDate">Ngày sinh</label>
                        <input type="text" class="form-control" name="birthdate" id="inputStudentBirthDate">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentGender">Giới tính</label>
                        <input type="text" name="gender" class="form-control" id="inputStudentGender">
                    </div>
                    <div class="form-group">
                        <label for="inputKhoa">Mã khoa</label>
                        <input type="text" name="khoa" class="form-control" id="inputKhoa">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary my-btn-submit">Thêm</button>
                </form>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
