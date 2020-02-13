<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-11 10:27:03
  from 'D:\GitHub\quanlytruonghoc_mvc\views\admin\add_student.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4273673dddd9_36604563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '571a20b58c618f3e54917d4167135c8407237e17' => 
    array (
      0 => 'D:\\GitHub\\quanlytruonghoc_mvc\\views\\admin\\add_student.tpl',
      1 => 1581405910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4273673dddd9_36604563 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_330098255e427367246823_08226631', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15257411485e42736724d8b2_52932545', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/template.tpl");
}
/* {block 'title'} */
class Block_330098255e427367246823_08226631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_330098255e427367246823_08226631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Thêm sinh viên<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_15257411485e42736724d8b2_52932545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15257411485e42736724d8b2_52932545',
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
                <form action="index.php?controller=admin&action=addstudent" method="post" class="my-update-form" enctype="multipart/form-data">
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
                        <label for="inputStudentName">Chọn ảnh đại diện</label>
                        <input type="file" name="avatar" class="form-control" id="inputAvatar" onchange="readURL(this);">
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
