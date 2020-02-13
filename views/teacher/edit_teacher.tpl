{extends file="layout/template.tpl"}
{block name=title}Cập nhật thông tin giảng viên{/block}
{block name=body}
    <div id="content-wrapper" class="d-flex flex-column">
    <div class="container-fluid">
        <h1 class="text-center">Cập nhật thông tin giảng viên</h1>
        <div class="row">
            {if isset($teacherData)}
                {assign var=teacher value=$teacherData[0]}
            <form action="index.php?controller=teacher&action=editteacher&id={$teacher.giaovienid}" method="post" class="my-update-form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputTeacherName">Tên giảng viên</label>
                    <input type="text" name="fullname" class="form-control" id="inputTeacherName" value="{$teacher.tengiaovien}">
                </div>
                <div class="form-group">
                    <label for="inputTeacherBirthDate">Chọn ngày sinh</label>
                    <input type="date" class="form-control" name="birthdate" id="inputTeacherBirthDate" value="{$teacher.ngaysinh}">
                </div>
                <div class="form-group">
                    <label for="inputTeacherGender">Giới tính</label>
                    {if $teacher.gioitinh eq "Nam"}
                        {php}
                            echo "<br><input type='radio' value='Nam' name='gender' id='male' checked><label for='male'>Nam</label>
                            <br><input type='radio' value='Nữ' name='gender' id='female'><label for='female'>Nữ</label>"
                        {/php}
                    {else}
                        {php}
                            echo "<br><input type='radio' value='Nam' name='gender' id='male'><label for='male'>Nam</label>
                            <br><input type='radio' value='Nữ' name='gender' id='female' checked><label for='female'>Nữ</label>"
                        {/php}
                    {/if}
                </div>
                <div class="form-group">
                    <label>Chọn bộ môn giảng dạy</label>
{*                <input type="text" name="khoa" class="form-control" id="inputKhoa" value="{$student.idkhoa}">*}
                    <select name="subject" id="inputSubject" class="form-control">
                        <option disabled selected>----- Danh sách môn học -----</option>
                        <option value="Văn">Văn</option>
                        <option value="GDCD">GDCD</option>
                        <option value="Quân sự">Quân sự</option>
                        <option value="Toán">Toán</option>
                        <option value="Vật Lý">Vật Lý</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Cập nhật ảnh đại diện</label><br>
                    <input class="btn btn-primary btn-choose-avatar" type="button" value="Chọn ảnh đại diện">
                    <input type="file" name="avatar" hidden id="edit-avatar">
                </div>
                <button type="submit" name="submit" class="btn btn-primary my-btn-submit">Sửa</button>
            </form>
            {else}
                <form action="index.php?controller=teacher&action=editteacher&id=" method="post" class="my-update-form">
                    <div class="form-group">
                        <label for="inputTeacherName">Tên giảng viên</label>
                        <input type="text" name="fullname" class="form-control" id="inputTeacherName" value="">
                    </div>
                    <div class="form-group">
                        <label for="inputTeacherBirthDate">Chọn ngày sinh</label>
                        <input type="date" class="form-control" name="birthdate" id="inputTeacherBirthDate" value="">
                    </div>
                    <div class="form-group">
                        <label for="inputStudentGender">Giới tính</label>
                        {if $teacher.gioitinh eq "Nam"}
                            {php}
                                echo "<br><input type='radio' value='Nam' name='gender' id='male' checked><label for='male'>Nam</label>
                                <br><input type='radio' value='Nữ' name='gender' id='female'><label for='female'>Nữ</label>"
                            {/php}
                        {else}
                            {php}
                                echo "<br><input type='radio' value='Nam' name='gender' id='male'><label for='male'>Nam</label>
                                <br><input type='radio' value='Nữ' name='gender' id='female' checked><label for='female'>Nữ</label>"
                            {/php}
                        {/if}
                    </div>
                    <div class="form-group">
                        <label for="">Chọn bộ môn giảng dạy</label>
    {*                        <input type="text" name="khoa" class="form-control" id="inputKhoa" value="">*}
                        <select name="subject" id="inputSubject" class="form-control">
                            <option disabled selected>----- Danh sách môn học -----</option>
                            <option value="Văn">Văn</option>
                            <option value="GDCD">GDCD</option>
                            <option value="Quân sự">Quân sự</option>
                            <option value="Toán">Toán</option>
                            <option value="Vật Lý">Vật Lý</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Cập nhật ảnh đại diện</label><br>
                        <input class="btn btn-primary btn-choose-avatar" type="button" value="Chọn ảnh đại diện">
                        <input type="file" name="avatar" hidden id="edit-avatar">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary my-btn-submit">Sửa</button>
                </form>
            {/if}
        </div>
    </div>
</div>
{/block}
