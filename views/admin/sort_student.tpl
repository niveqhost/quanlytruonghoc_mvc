{extends file="layout/template.tpl"}
{block name=title}Danh sách sinh viên{/block}
{block name=body}

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
                                <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"> -- Sắp xếp --
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
                            <p><b>Tổng số bản ghi - <span id="total_records">{$sortedList|@count}</span></b></p>
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
                            {foreach from=$sortedList item=student}
                                <tr>
                                    <td><img src="assets/images/student-img/{$student.avatar}" alt="Student Avatar"></td>
                                    <td>{$student.studentcode}</td>
                                    <td>{$student.fullname}</td>
                                    <td>{$student.birthdate}</td>
                                    <td>{$student.gender}</td>
                                    <td>{$student.khoa}</td>
                                    <td>
                                        <a href="#" class="badge badge-primary">Chi Tiết</a><br>
                                        <a href="index.php?controller=admin&action=removestudent&id={$student.studentid}" class="badge badge-danger">Xóa</a><br>
                                        <a href="index.php?controller=admin&action=editstudent&id={$student.studentid}" class="badge badge-success">Sửa</a>
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
}
{/block}


