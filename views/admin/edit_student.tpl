{extends file="layout/template.tpl"}
{block name=title}Thêm sinh viên{/block}
{block name=body}
    <div id="content-wrapper" class="d-flex flex-column">
    <div class="container-fluid">
        <h1 class="text-center">Cập nhật thông tin học sinh</h1>
        <div class="row">
            {if isset($studentData)}
                {assign var=student value=$studentData[0]}
            <form action="index.php?controller=admin&action=editstudent&id={$student.studentid}" method="post" class="my-update-form">
                <div class="form-group">
                    <label for="inputStudentCode">Mã sinh viên</label>
                    <input type="text" class="form-control" id="inputStudentCode" name="studentcode" value="{$student.studentcode}">
                </div>
                <div class="form-group">
                    <label for="inputStudentName">Tên sinh viên</label>
                    <input type="text" name="fullname" class="form-control" id="inputStudentName" value="{$student.fullname}">
                </div>
              <div class="form-group">
                <label for="inputStudentBirthDate">Ngày sinh</label>
                <input type="text" class="form-control" name="birthdate" id="inputStudentBirthDate" value="{$student.birthdate}">
              </div>
              <div class="form-group">
                <label for="inputStudentGender">Giới tính</label>
                <input type="text" name="gender" class="form-control" id="inputStudentGender" value="{$student.gender}">
              </div>
              <div class="form-group">
                <label for="inputKhoa">Mã khoa</label>
                <input type="text" name="khoa" class="form-control" id="inputKhoa" value="{$student.khoa}">
              </div>
              <button type="submit" name="submit" class="btn btn-primary my-btn-submit">Sửa</button>
            </form>
            {else}
                <form action="index.php?controller=admin&action=editstudent&id=" method="post" class="my-update-form">
                    <div class="form-group">
                        <label for="inputStudentCode">Mã sinh viên</label>
                        <input type="text" class="form-control" id="inputStudentCode" name="studentcode" value="">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentName">Tên sinh viên</label>
                        <input type="text" name="fullname" class="form-control" id="inputStudentName" value="">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentBirthDate">Ngày sinh</label>
                        <input type="text" class="form-control" name="birthdate" id="inputStudentBirthDate" value="">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentGender">Giới tính</label>
                        <input type="text" name="gender" class="form-control" id="inputStudentGender" value="">
                    </div>
                    <div class="form-group">
                        <label for="inputKhoa">Mã khoa</label>
                        <input type="text" name="khoa" class="form-control" id="inputKhoa" value="">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary my-btn-submit">Sửa</button>
            </form>
            {/if}
        </div>
    </div>
</div>
{/block}
