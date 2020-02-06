{extends file="layout/template.tpl"}
{block name=title}Thêm sinh viên{/block}
{block name='body'}
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="container-fluid">
            <h1 class="text-center">Thêm thông tin sinh viên</h1>
            <div class="text-danger">
                {if isset($message)}
                    {$message}
                {/if}
            </div>
            <div class="row">
                <form action="index.php?controller=admin&action=addstudent" method="post" class="my-update-form">
                    <div class="form-group">
                        <label for="inputStudentCode">Mã sinh viên</label>
                        <input type="text" class="form-control" id="inputStudentCode" name="studentcode">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentName">Tên sinh viên</label>
                        <input type="text" name="fullname" class="form-control" id="inputStudentName">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentBirthDate">Ngày sinh</label>
                        <input type="text" class="form-control" name="birthdate" id="inputStudentBirthDate">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentGender">Giới tính</label>
                        <input type="text" name="gender" class="form-control" id="inputStudentGender">
                    </div>
                    <div class="form-group">
                        <label for="inputKhoa">Mã khoa</label>
                        <input type="text" name="khoa" class="form-control" id="inputKhoa">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary my-btn-submit">Thêm</button>
                </form>
            </div>
        </div>
    </div>
{/block}