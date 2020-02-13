<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-05 05:18:02
  from 'D:\GitHub\crud_mvc_quanlytruonghoc\views\admin\edit_student.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3a41fac11126_44681149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3f437b569002c3f5fecc216ae6d828357d2856b' => 
    array (
      0 => 'D:\\GitHub\\crud_mvc_quanlytruonghoc\\views\\admin\\edit_student.tpl',
      1 => 1580876278,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3a41fac11126_44681149 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1031936415e3a41fabcc518_71846197', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5785009275e3a41fabd3dc3_00938459', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/template.tpl");
}
/* {block 'title'} */
class Block_1031936415e3a41fabcc518_71846197 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1031936415e3a41fabcc518_71846197',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Thêm sinh viên<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_5785009275e3a41fabd3dc3_00938459 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_5785009275e3a41fabd3dc3_00938459',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper" class="d-flex flex-column">
    <div class="container-fluid">
        <h1 class="text-center">Cập nhật thông tin học sinh</h1>
        <div class="row">
            <?php if (isset($_smarty_tpl->tpl_vars['studentData']->value)) {?>
                <?php $_smarty_tpl->_assignInScope('student', $_smarty_tpl->tpl_vars['studentData']->value[0]);?>
            <form action="index.php?controller=admin&action=editstudent&id=<?php echo $_smarty_tpl->tpl_vars['student']->value['studentid'];?>
" method="post" class="my-update-form">
                <div class="form-group">
                    <label for="inputStudentCode">Mã sinh viên</label>
                    <input type="text" class="form-control" id="inputStudentCode" name="studentcode" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['studentcode'];?>
">
                </div>
                <div class="form-group">
                    <label for="inputStudentName">Tên sinh viên</label>
                    <input type="text" name="fullname" class="form-control" id="inputStudentName" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['fullname'];?>
">
                </div>
              <div class="form-group">
                <label for="inputStudentBirthDate">Ngày sinh</label>
                <input type="text" class="form-control" name="birthdate" id="inputStudentBirthDate" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['birthdate'];?>
">
              </div>
              <div class="form-group">
                <label for="inputStudentGender">Giới tính</label>
                <input type="text" name="gender" class="form-control" id="inputStudentGender" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['gender'];?>
">
              </div>
              <div class="form-group">
                <label for="inputKhoa">Mã khoa</label>
                <input type="text" name="khoa" class="form-control" id="inputKhoa" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['khoa'];?>
">
              </div>
              <button type="submit" name="submit" class="btn btn-primary my-btn-submit">Sửa</button>
            </form>
            <?php } else { ?>
                <form action="index.php?controller=admin&action=editstudent&id=" method="post" class="my-update-form">
                    <div class="form-group">
                        <label for="inputStudentCode">Mã sinh viên</label>
                        <input type="text" class="form-control" id="inputStudentCode" name="studentcode" value="">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentName">Tên sinh viên</label>
                        <input type="text" name="fullname" class="form-control" id="inputStudentName" value="">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentBirthDate">Ngày sinh</label>
                        <input type="text" class="form-control" name="birthdate" id="inputStudentBirthDate" value="">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentGender">Giới tính</label>
                        <input type="text" name="gender" class="form-control" id="inputStudentGender" value="">
                    </div>
                    <div class="form-group">
                        <label for="inputKhoa">Mã khoa</label>
                        <input type="text" name="khoa" class="form-control" id="inputKhoa" value="">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary my-btn-submit">Sửa</button>
            </form>
            <?php }?>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
