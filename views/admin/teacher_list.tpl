{extends file="layout/template.tpl"}
{block name=title}Danh sách sinh viên{/block}
{block name=body}

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
                            {*foreach from=$allStudents item=student*}
                                <tr>
                                    <td><img src="assets/images/student-img/{*$student.avatar*}" alt="Teacher Avatar"></td>
                                    <td>{*$student.studentcode*}</td>
                                    <td>{*$student.fullname*}</td>
                                    <td>{*$student.birthdate*}</td>
                                    <td>{*$student.gender*}</td>
                                    <td>{*$student.khoa*}</td>
                                    <td>
                                        <a href="#" class="badge badge-primary">Chi Tiết</a><br>
                                        <a href="index.php?controller=admin&action=removeteacher&id={*$student.studentid*}" class="badge badge-danger">Xóa</a><br>
                                        <a href="index.php?controller=admin&action=editteacher&id={*$student.studentid*}" class="badge badge-success">Sửa</a>
                                    </td>
                                </tr>
                            {*/foreach*}
                        </tbody>
                    </table>
                </div>
              </div>
          </div>
      </div>
      <!-- End of Main Content -->
}
{/block}


