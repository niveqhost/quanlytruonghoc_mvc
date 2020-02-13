<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-12 05:36:52
  from 'D:\GitHub\quanlytruonghoc_mvc\views\teacher\edit_teacher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4380e4ce4307_53220939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94eb1cda8f63d3a56d149fb2cdd58f4de0b698a3' => 
    array (
      0 => 'D:\\GitHub\\quanlytruonghoc_mvc\\views\\teacher\\edit_teacher.tpl',
      1 => 1581481933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4380e4ce4307_53220939 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10197994675e4380e4c77480_76656849', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8592720095e4380e4c7d400_55463217', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/template.tpl");
}
/* {block 'title'} */
class Block_10197994675e4380e4c77480_76656849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10197994675e4380e4c77480_76656849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Cập nhật thông tin giảng viên<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_8592720095e4380e4c7d400_55463217 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_8592720095e4380e4c7d400_55463217',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper" class="d-flex flex-column">
    <div class="container-fluid">
        <h1 class="text-center">Cập nhật thông tin giảng viên</h1>
        <div class="row">
            <?php if (isset($_smarty_tpl->tpl_vars['teacherData']->value)) {?>
                <?php $_smarty_tpl->_assignInScope('teacher', $_smarty_tpl->tpl_vars['teacherData']->value[0]);?>
            <form action="index.php?controller=teacher&action=editteacher&id=<?php echo $_smarty_tpl->tpl_vars['teacher']->value['giaovienid'];?>
" method="post" class="my-update-form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputTeacherName">Tên giảng viên</label>
                    <input type="text" name="fullname" class="form-control" id="inputTeacherName" value="<?php echo $_smarty_tpl->tpl_vars['teacher']->value['tengiaovien'];?>
">
                </div>
                <div class="form-group">
                    <label for="inputTeacherBirthDate">Chọn ngày sinh</label>
                    <input type="date" class="form-control" name="birthdate" id="inputTeacherBirthDate" value="<?php echo $_smarty_tpl->tpl_vars['teacher']->value['ngaysinh'];?>
">
                </div>
                <div class="form-group">
                    <label for="inputTeacherGender">Giới tính</label>
                    <?php if ($_smarty_tpl->tpl_vars['teacher']->value['gioitinh'] == "Nam") {?>
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
                    <label>Chọn bộ môn giảng dạy</label>
                    <select name="subject" id="inputSubject" class="form-control">
                        <option disabled selected>----- Danh sách môn học -----</option>
                        <option value="Văn">Văn</option>
                        <option value="GDCD">GDCD</option>
                        <option value="Quân sự">Quân sự</option>
                        <option value="Toán">Toán</option>
                        <option value="Vật Lý">Vật Lý</option>
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
                <form action="index.php?controller=teacher&action=editteacher&id=" method="post" class="my-update-form">
                    <div class="form-group">
                        <label for="inputTeacherName">Tên giảng viên</label>
                        <input type="text" name="fullname" class="form-control" id="inputTeacherName" value="">
                    </div>
                    <div class="form-group">
                        <label for="inputTeacherBirthDate">Chọn ngày sinh</label>
                        <input type="date" class="form-control" name="birthdate" id="inputTeacherBirthDate" value="">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentGender">Giới tính</label>
                        <?php if ($_smarty_tpl->tpl_vars['teacher']->value['gioitinh'] == "Nam") {?>
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
                        <label for="">Chọn bộ môn giảng dạy</label>
                            <select name="subject" id="inputSubject" class="form-control">
                            <option disabled selected>----- Danh sách môn học -----</option>
                            <option value="Văn">Văn</option>
                            <option value="GDCD">GDCD</option>
                            <option value="Quân sự">Quân sự</option>
                            <option value="Toán">Toán</option>
                            <option value="Vật Lý">Vật Lý</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Cập nhật ảnh đại diện</label><br>
                        <input class="btn btn-primary btn-choose-avatar" type="button" value="Chọn ảnh đại diện">
                        <input type="file" name="avatar" hidden id="edit-avatar">
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
