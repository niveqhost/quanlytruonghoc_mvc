{extends file="layout/template.tpl"}
{block name=title}Thêm sinh viên{/block}
{block name='body'}
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="container-fluid">
            <h1 class="text-center">Thêm thông tin sinh viên</h1>
            <div class="text-danger">
                {if isset($addErrMsg)}
                    {$addErrMsg}
                {/if}
            </div>
            <div class="row">
                <form action="index.php?controller=student&action=addstudent" method="post" class="my-update-form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputStudentCode">Mã sinh viên</label>
                        <input type="text" class="form-control" id="inputStudentCode" name="studentcode">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentName">Tên sinh viên</label>
                        <input type="text" name="fullname" class="form-control" id="inputStudentName">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentBirthDate">Chọn ngày sinh</label>
                        <input type="date" class="form-control" name="birthdate" id="datepicker">
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
{*                        <input type="text" name="gender" class="form-control" id="inputStudentGender">*}
                        <br><input type="radio" value="Nam" name="gender" id="male" checked><label for="male">Nam</label>
                        <br><input type="radio" value="Nữ" name="gender" id="female"><label for="female">Nữ</label>
                    </div>
                    <div class="form-group">
                        <label for="inputKhoa">Khoa</label>
{*                        <input type="text" name="khoa" class="form-control" id="inputKhoa">*}
                        <select name="khoa" class="form-control">
                            <option disabled >----- Danh sách khoa -----</option>
                            <option value="1" selected>CNTT</option>
                            <option value="2">Công trình</option>
                            <option value="3">Cầu đường</option>
                            <option value="4">Cơ khí</option>
                            <option value="5">Xây dựng</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label for="inputStudentName">Chọn ảnh đại diện</label>
                        <input type="file" name="avatar" class="form-control" id="inputAvatar">
                     </div>
                    <button type="submit" name="submit" class="btn btn-primary my-btn-submit">Thêm</button>
                </form>
            </div>
        </div>
    </div>
{/block}