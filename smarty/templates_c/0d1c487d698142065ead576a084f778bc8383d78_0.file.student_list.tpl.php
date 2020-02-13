<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-13 10:39:09
  from 'D:\GitHub\quanlytruonghoc_mvc\views\student\student_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e45193dee9417_67406328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d1c487d698142065ead576a084f778bc8383d78' => 
    array (
      0 => 'D:\\GitHub\\quanlytruonghoc_mvc\\views\\student\\student_list.tpl',
      1 => 1581586622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e45193dee9417_67406328 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20449140635e45193d4e6718_58623021', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17581085585e45193d4f6559_42924986', 'body');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/template.tpl");
}
/* {block 'title'} */
class Block_20449140635e45193d4e6718_58623021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20449140635e45193d4e6718_58623021',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Danh sách sinh viên<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_17581085585e45193d4f6559_42924986 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17581085585e45193d4f6559_42924986',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\GitHub\\quanlytruonghoc_mvc\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>


    <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 my-student-list">
                    <h3 class="text-center text-info">Danh Sách Sinh Viên</h3>
                    <div class="col-md-12">

                        <div class="col-md-3 float-right">
                            <p><b>Tổng số bản ghi - <span id="total_records"><?php echo count($_smarty_tpl->tpl_vars['allStudents']->value);?>
</span></b></p>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Ảnh Đại Diện</th>
                                <th><a href="index.php?controller=student&action=sortstudent&col=studentcode&type=ASC">Mã Sinh Viên</a></th>
                                <th><a href="index.php?controller=student&action=sortstudent&col=fullname&type=ASC">Tên Sinh Viên</a></th>
                                <th><a href="index.php?controller=student&action=sortstudent&col=birthdate&type=ASC">Ngày Sinh</a></th>
                                <th><a href="index.php?controller=student&action=sortstudent&col=gender&type=ASC">Giới Tính</a></th>
                                <th><a href="index.php?controller=student&action=sortstudent&col=idkhoa&type=ASC">Khoa</a></th>
                                <th>Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allStudents']->value, 'student');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['student']->value) {
?>
                                <tr>
                                    <td><img src="assets/images/student-img/<?php echo $_smarty_tpl->tpl_vars['student']->value['avatar'];?>
" alt="Student Avatar"></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['student']->value['studentcode'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['student']->value['fullname'];?>
</td>
                                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['student']->value['birthdate'],'%d / %m / %Y');?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['student']->value['gender'];?>
</td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['student']->value['idkhoa'] == 1) {?> <?php  echo "CNTT"; ?>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['student']->value['idkhoa'] == 2) {?> <?php  echo "Công trình"; ?>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['student']->value['idkhoa'] == 3) {?> <?php  echo "Cầu đường"; ?>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['student']->value['idkhoa'] == 4) {?> <?php  echo "Cơ khí"; ?>
                                        <?php } else { ?> <?php  echo "Xây dựng"; ?>
                                        <?php }?>
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-primary">Chi Tiết</a><br>
                                        <a href="index.php?controller=student&action=removestudent&id=<?php echo $_smarty_tpl->tpl_vars['student']->value['studentid'];?>
" class="badge badge-danger">Xóa</a><br>
                                        <a href="index.php?controller=student&action=editstudent&id=<?php echo $_smarty_tpl->tpl_vars['student']->value['studentid'];?>
" class="badge badge-success">Sửa</a>
                                    </td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
              </div>
          </div>
      </div>
      <!-- End of Main Content -->
<?php
}
}
/* {/block 'body'} */
}
