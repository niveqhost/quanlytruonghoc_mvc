<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-13 10:39:57
  from 'D:\GitHub\quanlytruonghoc_mvc\views\teacher\sort_teacher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e45196ded4117_27577221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '897dce3ccf1310d7deed8e502f7498772c5dc45f' => 
    array (
      0 => 'D:\\GitHub\\quanlytruonghoc_mvc\\views\\teacher\\sort_teacher.tpl',
      1 => 1581586715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e45196ded4117_27577221 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7513889185e45196de145a8_33087810', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1691079355e45196de32449_40387189', 'body');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout/template.tpl");
}
/* {block 'title'} */
class Block_7513889185e45196de145a8_33087810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7513889185e45196de145a8_33087810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Danh sách giáo viên<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1691079355e45196de32449_40387189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1691079355e45196de32449_40387189',
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
                    <h3 class="text-center text-info">Danh Sách Giảng Viên</h3>
                    <div class="col-md-12">
                        <div class="col-md-3 float-right">
                            <p><b>Tổng số bản ghi - <span id="total_records"><?php echo count($_smarty_tpl->tpl_vars['sortedList']->value);?>
</span></b></p>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Ảnh Đại Diện</th>
                                <th><a href="index.php?controller=teacher&action=sortteacher&col=tengiaovien&type=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
">Tên Giáo Viên</a></th>
                                <th><a href="index.php?controller=teacher&action=sortteacher&col=bomon&type=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
">Bộ môn giảng dạy</a></th>
                                <th><a href="index.php?controller=teacher&action=sortteacher&col=ngaysinh&type=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
">Ngày Sinh</a></th>
                                <th><a href="index.php?controller=teacher&action=sortteacher&col=gioitinh&type=<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
">Giới Tính</a></th>
                                <th>Hành Động</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sortedList']->value, 'teacher');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['teacher']->value) {
?>
                                <tr>
                                    <td><img src="assets/images/teacher-img/<?php echo $_smarty_tpl->tpl_vars['teacher']->value['anhdaidien'];?>
" alt="Teacher Avatar"></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['teacher']->value['tengiaovien'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['teacher']->value['bomon'];?>
</td>
                                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['teacher']->value['ngaysinh'],'%d / %m / %Y');?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['teacher']->value['gioitinh'];?>
</td>
                                    <td>
                                        <a href="#" class="badge badge-primary">Chi Tiết</a><br>
                                        <a href="index.php?controller=teacher&action=removeteacher&id=<?php echo $_smarty_tpl->tpl_vars['teacher']->value['giaovienid'];?>
" class="badge badge-danger">Xóa</a><br>
                                        <a href="index.php?controller=teacher&action=editteacher&id=<?php echo $_smarty_tpl->tpl_vars['teacher']->value['giaovienid'];?>
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
