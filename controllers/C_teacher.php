<?php
    include_once 'models/M_Teacher.php';
    include_once 'core/C_base.php';
    class C_Teacher extends BaseController {

        public function list() {
            $allTeachers = M_Teacher::getAllTeachers();
            $this->render('list', "Trang danh sách giáo viên", $allTeachers);
        }
    }
?>