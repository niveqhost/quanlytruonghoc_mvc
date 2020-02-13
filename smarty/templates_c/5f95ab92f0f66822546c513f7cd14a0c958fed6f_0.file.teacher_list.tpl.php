<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-11 11:05:40
  from 'D:\GitHub\quanlytruonghoc_mvc\views\admin\teacher_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e427c7465d2b1_34448175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f95ab92f0f66822546c513f7cd14a0c958fed6f' => 
    array (
      0 => 'D:\\GitHub\\quanlytruonghoc_mvc\\views\\admin\\teacher_list.tpl',
      1 => 1580805062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e427c7465d2b1_34448175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7752418035e427c746233b5_66117731', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14963699005e427c7464fa75_94456456', 'body');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/template.tpl");
}
/* {block 'title'} */
class Block_7752418035e427c746233b5_66117731 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7752418035e427c746233b5_66117731',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Danh sách sinh viên<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_14963699005e427c7464fa75_94456456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14963699005e427c7464fa75_94456456',
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
