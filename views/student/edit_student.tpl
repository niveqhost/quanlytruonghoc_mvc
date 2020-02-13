{extends file="layout/template.tpl"}
{block name=title}Cập nhật thông tin sinh viên{/block}
{block name=body}
    <div id="content-wrapper" class="d-flex flex-column">
    <div class="container-fluid">
        <h1 class="text-center">Cập nhật thông tin sinh viên</h1>
        <div class="text-danger">{if isset($editErrMsg)}{$editErrMsg}{/if}</div>
        <div class="row">
            {if isset($studentData)}
                {assign var=student value=$studentData[0]}
            <form action="index.php?controller=student&action=editstudent&id={$student.studentid}" method="post" class="my-update-form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputStudentCode">Mã sinh viên</label>
                    <input type="text" class="form-control" id="inputStudentCode" name="studentcode" value="{$student.studentcode}">
                </div>
                <div class="form-group">
                    <label for="inputStudentName">Tên sinh viên</label>
                    <input type="text" name="fullname" class="form-control" id="inputStudentName" value="{$student.fullname}">
                </div>
                <div class="form-group">
                    <label for="inputStudentBirthDate">Chọn ngày sinh</label>
                    <input type="date" class="form-control" name="birthdate" id="inputStudentBirthDate" value="{$student.birthdate}">
                </div>
                <div class="form-group">
                    <label for="inputStudentGender">Giới tính</label>
                    {if $student.gender eq "Nam"}
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
                    <label for="inputKhoa">Khoa</label>
{*                <input type="text" name="khoa" class="form-control" id="inputKhoa" value="{$student.idkhoa}">*}
                    <select name="khoa" id="" class="form-control">
                        <option disabled >----- Danh sách khoa -----</option>
                        <option value="1" selected>CNTT</option>
                        <option value="2">Công trình</option>
                        <option value="3">Cầu đường</option>
                        <option value="4">Cơ khí</option>
                        <option value="5">Xây dựng</option>
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
