<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-11 09:41:24
  from 'D:\GitHub\quanlytruonghoc_mvc\views\admin\edit_student.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4268b4ada2c2_51009864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4da60e26cf0b2061329c6de30af6d3941c04f491' => 
    array (
      0 => 'D:\\GitHub\\quanlytruonghoc_mvc\\views\\admin\\edit_student.tpl',
      1 => 1581410478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4268b4ada2c2_51009864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6514079675e4268b486dcb1_97548023', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4912224275e4268b4872a35_07371848', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/template.tpl");
}
/* {block 'title'} */
class Block_6514079675e4268b486dcb1_97548023 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6514079675e4268b486dcb1_97548023',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Cập nhật thông tin sinh viên<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_4912224275e4268b4872a35_07371848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4912224275e4268b4872a35_07371848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper" class="d-flex flex-column">
    <div class="container-fluid">
        <h1 class="text-center">Cập nhật thông tin sinh viên</h1>
        <div class="row">
            <?php if (isset($_smarty_tpl->tpl_vars['studentData']->value)) {?>
                <?php $_smarty_tpl->_assignInScope('student', $_smarty_tpl->tpl_vars['studentData']->value[0]);?>
            <form action="index.php?controller=admin&action=editstudent&id=<?php echo $_smarty_tpl->tpl_vars['student']->value['studentid'];?>
" method="post" class="my-update-form" enctype="multipart/form-data">
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
                    <label for="inputStudentBirthDate">Chọn ngày sinh</label>
                    <input type="date" class="form-control" name="birthdate" id="inputStudentBirthDate" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['birthdate'];?>
">
                </div>
                <div class="form-group">
                    <label for="inputStudentGender">Giới tính</label>
                    <?php if ($_smarty_tpl->tpl_vars['student']->value['gender'] == "Nam") {?>
                        <?php 
                            echo "<br><input type='radio' value='Nam' name='gender' id='male' checked><label for='male'>Nam</label>
                            <br><input type='radio' value='Nữ' name='gender' id='female'><label for='female'>Nữ</label>"
                        ?>
                    <?php } else { ?>
                        <?php 
                            echo "<br><input type='radio' value='Nam' name='gender' id='male'><label for='male'>Nam</label>
                            <br><input type='radio' value='Nữ' name='gender' id='female' checked><label for='female'>Nữ</label>"
                        ?>
                    <?php }?>
                </div>
                <div class="form-group">
                    <label for="inputKhoa">Khoa</label>
                    <select name="khoa" id="" class="form-control">
                        <option disabled selected>----- Chọn khoa -----</option>
                        <option value="1">CNTT</option>
                        <option value="2">Công trình</option>
                        <option value="3">Cầu đường</option>
                        <option value="4">Cơ khí</option>
                        <option value="5">Xây dựng</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Cập nhật ảnh đại diện</label><br>
                    <input class="btn btn-primary btn-choose-avatar" type="button" value="Chọn ảnh đại diện">
                    <input type="file" name="avatar" hidden id="edit-avatar">
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
                        <label for="inputStudentBirthDate">Chọn ngày sinh</label>
                        <input type="date" class="form-control" name="birthdate" id="inputStudentBirthDate" value="">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentGender">Giới tính</label>
                        <input type="text" name="gender" class="form-control" id="inputStudentGender" value="">
                    </div>
                    <div class="form-group">
                        <label for="inputKhoa">Khoa</label>
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
