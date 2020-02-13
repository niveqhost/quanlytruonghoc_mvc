<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-13 10:10:31
  from 'D:\GitHub\quanlytruonghoc_mvc\views\student\add_student.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e451287b44062_60497528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2472cd8ed087bb0f6d8625b53be15183ac0a6fa' => 
    array (
      0 => 'D:\\GitHub\\quanlytruonghoc_mvc\\views\\student\\add_student.tpl',
      1 => 1581584949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e451287b44062_60497528 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2168368855e451287b11c54_83898394', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16040287975e451287b19b55_14156993', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/template.tpl");
}
/* {block 'title'} */
class Block_2168368855e451287b11c54_83898394 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2168368855e451287b11c54_83898394',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Thêm sinh viên<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_16040287975e451287b19b55_14156993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16040287975e451287b19b55_14156993',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper" class="d-flex flex-column">
        <div class="container-fluid">
            <h1 class="text-center">Thêm thông tin sinh viên</h1>
            <div class="text-danger">
                <?php if (isset($_smarty_tpl->tpl_vars['addErrMsg']->value)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['addErrMsg']->value;?>

                <?php }?>
            </div>
            <div class="row">
                <form action="index.php?controller=student&action=addstudent" method="post" class="my-update-form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputStudentCode">Mã sinh viên</label>
                        <input type="text" class="form-control" id="inputStudentCode" name="studentcode">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentName">Tên sinh viên</label>
                        <input type="text" name="fullname" class="form-control" id="inputStudentName">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentBirthDate">Chọn ngày sinh</label>
                        <input type="date" class="form-control" name="birthdate" id="datepicker">
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
                        <br><input type="radio" value="Nam" name="gender" id="male" checked><label for="male">Nam</label>
                        <br><input type="radio" value="Nữ" name="gender" id="female"><label for="female">Nữ</label>
                    </div>
                    <div class="form-group">
                        <label for="inputKhoa">Khoa</label>
                        <select name="khoa" class="form-control">
                            <option disabled >----- Danh sách khoa -----</option>
                            <option value="1" selected>CNTT</option>
                            <option value="2">Công trình</option>
                            <option value="3">Cầu đường</option>
                            <option value="4">Cơ khí</option>
                            <option value="5">Xây dựng</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label for="inputStudentName">Chọn ảnh đại diện</label>
                        <input type="file" name="avatar" class="form-control" id="inputAvatar">
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
