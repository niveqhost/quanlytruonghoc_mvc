<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-05 09:07:57
  from 'D:\GitHub\crud_mvc_quanlytruonghoc\views\admin\student_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3a77dd2138f2_81469315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf60c03d1ab5334ec20df5c43366b914698258c1' => 
    array (
      0 => 'D:\\GitHub\\crud_mvc_quanlytruonghoc\\views\\admin\\student_list.tpl',
      1 => 1580890065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3a77dd2138f2_81469315 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17269270215e3a77dce7cc31_72117962', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1836530365e3a77dce82ca6_13209517', 'body');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/template.tpl");
}
/* {block 'title'} */
class Block_17269270215e3a77dce7cc31_72117962 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17269270215e3a77dce7cc31_72117962',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Danh sách sinh viên<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1836530365e3a77dce82ca6_13209517 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1836530365e3a77dce82ca6_13209517',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 my-student-list">
                    <h3 class="text-center text-info">Danh Sách Sinh Viên</h3>
                    <div class="col-md-12">
                        <div class="float-left col-md-6">
                            <b>Sắp xếp theo : </b>
                            <div class="dropdown my-dropdown-sort-list">
                                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">-- Sắp xếp --
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?controller=admin&action=sort&col=studentcode&type=DESC">Mã Sinh Viên Giảm Dần</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?controller=admin&action=sort&col=studentcode&type=ASC">Mã Sinh Viên Tăng Dần</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?controller=admin&action=sort&col=fullname&type=DESC">Tên Sinh Viên Giảm Dần</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?controller=admin&action=sort&col=fullname&type=ASC">Tên Sinh Viên Tăng Dần</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?controller=admin&action=sort&col=birthDate&type=DESC">Ngày Sinh Giảm Dần</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.php?controller=admin&action=sort&col=birthDate&type=ASC">Ngày Sinh Tăng Dần</a></li>
                                    <li role="presentation" class="divider"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 float-left">
                            <p><b>Tổng số bản ghi - <span id="total_records"><?php echo count($_smarty_tpl->tpl_vars['allStudents']->value);?>
</span></b></p>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Ảnh Đại Diện</th>
                                <th>Mã Sinh Viên</th>
                                <th>Tên Sinh Viên</th>
                                <th>Ngày Sinh</th>
                                <th>Giới Tính</th>
                                <th>Khoa</th>
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
                                    <td><?php echo $_smarty_tpl->tpl_vars['student']->value['birthdate'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['student']->value['gender'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['student']->value['khoa'];?>
</td>
                                    <td>
                                        <a href="#" class="badge badge-primary">Chi Tiết</a><br>
                                        <a href="index.php?controller=admin&action=removestudent&id=<?php echo $_smarty_tpl->tpl_vars['student']->value['studentid'];?>
" class="badge badge-danger">Xóa</a><br>
                                        <a href="index.php?controller=admin&action=editstudent&id=<?php echo $_smarty_tpl->tpl_vars['student']->value['studentid'];?>
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
}
<?php
}
}
/* {/block 'body'} */
}
