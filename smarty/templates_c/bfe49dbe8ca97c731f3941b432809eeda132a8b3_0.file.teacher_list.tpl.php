<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-04 09:32:44
  from 'D:\GitHub\crud_mvc_quanlytruonghoc\views\admin\teacher_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e392c2c4a5d58_85907993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfe49dbe8ca97c731f3941b432809eeda132a8b3' => 
    array (
      0 => 'D:\\GitHub\\crud_mvc_quanlytruonghoc\\views\\admin\\teacher_list.tpl',
      1 => 1580805062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e392c2c4a5d58_85907993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7738056005e392c2c492ef1_16609839', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_956005525e392c2c49ae22_22433976', 'body');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/template.tpl");
}
/* {block 'title'} */
class Block_7738056005e392c2c492ef1_16609839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7738056005e392c2c492ef1_16609839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Danh sách sinh viên<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_956005525e392c2c49ae22_22433976 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_956005525e392c2c49ae22_22433976',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <div class="container-fluid">
            <div class="row">

                <div class="col-md-12 my-student-list">
                    <h3 class="text-center text-info">Danh Sách Giáo Viên</h3>
                    <div align="right">
                        <p><b>Total Records - <span id="total_records"></span></b></p>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Ảnh Đại Diện</th>
                                <th>Mã Giảng Viên</th>
                                <th>Tên Giảng Viên</th>
                                <th>Ngày Sinh</th>
                                <th>Giới Tính</th>
                                <th>Bộ Môn Phụ Trách</th>
                                <th>Hành Động</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                                                            <tr>
                                    <td><img src="assets/images/student-img/" alt="Teacher Avatar"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="#" class="badge badge-primary">Chi Tiết</a><br>
                                        <a href="index.php?controller=admin&action=removeteacher&id=" class="badge badge-danger">Xóa</a><br>
                                        <a href="index.php?controller=admin&action=editteacher&id=" class="badge badge-success">Sửa</a>
                                    </td>
                                </tr>
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
