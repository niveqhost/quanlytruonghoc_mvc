{extends file="layout/template.tpl"}
{block name=title}Thêm giảng viên{/block}
{block name='body'}
    <div id="content-wrapper" class="d-flex flex-column">
        <div class="container-fluid">
            <h1 class="text-center">Thêm thông tin giảng viên</h1>
            <div class="text-danger">
                {if isset($message)}
                    {$message}
                {/if}
            </div>
            <div class="row">
                <form action="index.php?controller=teacher&action=addteacher" method="post" class="my-update-form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inputTeacherName">Tên giảng viên</label>
                        <input type="text" name="fullname" class="form-control" id="inputTeacherName">
                    </div>
                    <div class="form-group">
                        <label for="inputTeacherBirthDate">Chọn ngày sinh</label>
                        <input type="date" class="form-control" name="birthdate" id="datepicker">
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
{*                        <input type="text" name="gender" class="form-control" id="inputStudentGender">*}
                        <br><input type="radio" value="Nam" name="gender" id="male" checked><label for="male">Nam</label>
                        <br><input type="radio" value="Nữ" name="gender" id="female"><label for="female">Nữ</label>
                    </div>
                    <div class="form-group">
                        <label for="inputSubject">Chọn bộ môn giảng dạy</label>
{*                        <input type="text" name="khoa" class="form-control" id="inputKhoa">*}
                        <select name="subject" id="inputSubject" class="form-control">
                            <option disabled selected>----- Danh sách bộ môn -----</option>
                            <option value="Văn">Văn</option>
                            <option value="GDCD">GDCD</option>
                            <option value="Quân sự">Quân sự</option>
                            <option value="Toán">Toán</option>
                            <option value="Vật Lý">Vật Lý</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label for="inputTeacherAvatar">Chọn ảnh đại diện</label>
                        <input type="file" name="avatar" class="form-control" id="inputAvatar">
                     </div>
                    <button type="submit" name="submit" class="btn btn-primary my-btn-submit">Thêm</button>
                </form>
            </div>
        </div>
    </div>
{/block}