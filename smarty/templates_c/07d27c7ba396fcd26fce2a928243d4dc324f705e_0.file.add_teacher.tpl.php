<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-12 11:42:36
  from 'D:\GitHub\quanlytruonghoc_mvc\views\teacher\add_teacher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e43d69c5c09a9_11312512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07d27c7ba396fcd26fce2a928243d4dc324f705e' => 
    array (
      0 => 'D:\\GitHub\\quanlytruonghoc_mvc\\views\\teacher\\add_teacher.tpl',
      1 => 1581503771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e43d69c5c09a9_11312512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8299748535e43d69c5aa914_44678784', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15865617235e43d69c5afa23_53889744', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/template.tpl");
}
/* {block 'title'} */
class Block_8299748535e43d69c5aa914_44678784 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8299748535e43d69c5aa914_44678784',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Thêm giảng viên<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_15865617235e43d69c5afa23_53889744 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_15865617235e43d69c5afa23_53889744',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper" class="d-flex flex-column">
        <div class="container-fluid">
            <h1 class="text-center">Thêm thông tin giảng viên</h1>
            <div class="text-danger">
                <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                <?php }?>
            </div>
            <div class="row">
                <form action="index.php?controller=teacher&action=addteacher" method="post" class="my-update-form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputTeacherName">Tên giảng viên</label>
                        <input type="text" name="fullname" class="form-control" id="inputTeacherName">
                    </div>
                    <div class="form-group">
                        <label for="inputTeacherBirthDate">Chọn ngày sinh</label>
                        <input type="date" class="form-control" name="birthdate" id="datepicker">
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
                        <br><input type="radio" value="Nam" name="gender" id="male" checked><label for="male">Nam</label>
                        <br><input type="radio" value="Nữ" name="gender" id="female"><label for="female">Nữ</label>
                    </div>
                    <div class="form-group">
                        <label for="inputSubject">Chọn bộ môn giảng dạy</label>
                        <select name="subject" id="inputSubject" class="form-control">
                            <option disabled selected>----- Danh sách bộ môn -----</option>
                            <option value="Văn">Văn</option>
                            <option value="GDCD">GDCD</option>
                            <option value="Quân sự">Quân sự</option>
                            <option value="Toán">Toán</option>
                            <option value="Vật Lý">Vật Lý</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label for="inputTeacherAvatar">Chọn ảnh đại diện</label>
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
