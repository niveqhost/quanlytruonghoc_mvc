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
                        <div class="col-md-3 float-right">
                            <p><b>Tổng số bản ghi - <span id="total_records">{$sortedList|@count}</span></b></p>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Ảnh Đại Diện</th>
                                <th><a href="index.php?controller=student&action=sortstudent&col=studentcode&type={$order}">Mã Sinh Viên</a></th>
                                <th><a href="index.php?controller=student&action=sortstudent&col=fullname&type={$order}">Tên Sinh Viên</a></th>
                                <th><a href="index.php?controller=student&action=sortstudent&col=birthdate&type={$order}">Ngày Sinh</a></th>
                                <th><a href="index.php?controller=student&action=sortstudent&col=gender&type={$order}">Giới Tính</a></th>
                                <th><a href="index.php?controller=student&action=sortstudent&col=idkhoa&type={$order}">Khoa</a></th>
                                <th>Hành Động</th>
                            </tr>
                        </thead>

                        <tbody>
                            {foreach from=$sortedList item=student}
                                <tr>
                                    <td><img src="assets/images/student-img/{$student.avatar}" alt="Student Avatar"></td>
                                    <td>{$student.studentcode}</td>
                                    <td>{$student.fullname}</td>
                                    <td>{$student.birthdate|date_format:'%d / %m / %Y'}</td>
                                    <td>{$student.gender}</td>
                                    <td>
                                        {if $student.idkhoa eq 1} {php} echo "CNTT"; {/php}
                                        {elseif $student.idkhoa eq 2} {php} echo "Công trình"; {/php}
                                        {elseif $student.idkhoa eq 3} {php} echo "Cầu đường"; {/php}
                                        {elseif $student.idkhoa eq 4} {php} echo "Cơ khí"; {/php}
                                        {else} {php} echo "Xây dựng"; {/php}
                                        {/if}
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-primary">Chi Tiết</a><br>
                                        <a href="index.php?controller=student&action=removestudent&id={$student.studentid}" class="badge badge-danger">Xóa</a><br>
                                        <a href="index.php?controller=student&action=editstudent&id={$student.studentid}" class="badge badge-success">Sửa</a>
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


