{extends file="layout/template.tpl"}
{block name=title}Danh sách giảng viên{/block}
{block name=body}

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 my-student-list">
                    <h3 class="text-center text-info">Danh Sách Giảng Viên</h3>
                    <div align="right">
                        <p><b>Tổng số bản ghi - <span id="total_records">{$allTeachers|@count}</span></b></p>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Ảnh Đại Diện</th>
                                <th><a href="index.php?controller=teacher&action=sortteacher&col=tengiaovien&type=ASC">Tên Giáo Viên</a></th>
                                <th><a href="index.php?controller=teacher&action=sortteacher&col=bomon&type=ASC">Bộ môn giảng dạy</a></th>
                                <th><a href="index.php?controller=teacher&action=sortteacher&col=ngaysinh&type=ASC">Ngày Sinh</a></th>
                                <th><a href="index.php?controller=teacher&action=sortteacher&col=gioitinh&type=ASC">Giới Tính</a></th>
                                <th>Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach from=$allTeachers item=teacher}
                                <tr>
                                    <td><img src="assets/images/teacher-img/{$teacher.anhdaidien}" alt="Teacher Avatar"></td>
                                    <td>{$teacher.tengiaovien}</td>
                                    <td>{$teacher.bomon}</td>
                                    <td>{$teacher.ngaysinh|date_format: '%d / %m / %Y'}</td>
                                    <td>{$teacher.gioitinh}</td>
                                    <td>
                                        <a href="#" class="badge badge-primary">Chi Tiết</a><br>
                                        <a href="index.php?controller=teacher&action=removeteacher&id={$teacher.giaovienid}" class="badge badge-danger">Xóa</a><br>
                                        <a href="index.php?controller=teacher&action=editteacher&id={$teacher.giaovienid}" class="badge badge-success">Sửa</a>
                                    </td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->
{/block}


