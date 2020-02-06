<?php
include_once 'models/M_student.php';
include_once 'core/C_base.php';

class Admin extends BaseController
{
    private $studentEntity;

    public function __construct()
    {
        parent::__construct();
        $this->studentEntity = new M_Student();
    }

    public function studentList()
    {
        $allStudents = $this->studentEntity->getAllStudents();
        if (!empty($allStudents)) {
            $this->smarty->assign('allStudents', $allStudents);
        }

        $this->render('admin/student_list.tpl');
    }

    public function removeStudent()
    {
        if ($_GET['action'] == 'removestudent') {
            $this->studentEntity->removeStudent($_GET['id']);
        }
        header('location: index.php?controller=admin&action=studentlist');

    }

    public function addStudent()
    {
        if ($_GET['action'] == 'addstudent') {
            if (isset($_POST['submit'])) {
                $studentCode = $_POST['studentcode'];
                $fullname = $_POST['fullname'];
                $birthDate = $_POST['birthdate'];
                $gender = $_POST['gender'];
                $khoa = $_POST['khoa'];
                if (empty($studentCode) || empty($fullname) || empty($birthDate) || empty($gender) || empty($khoa)) {
                    $message = 'Các trường dữ liệu không được để trống';
                }
                else {
                    $allStudent = $this->studentEntity->getAllStudents();
                    foreach ($allStudent as $student) {
                        if( $studentCode === $student['studentcode'] || $fullname === $student['fullname'] || $gender === $student['gender'] || $birthDate === $student['birthdate'] || $khoa === $student['khoa']) {
                            $message = 'Dữ liệu đã tồn tại trong database';
                        }
                        else {
                            $this->studentEntity->addStudent(array('studentcode' => $studentCode, 'fullname' => $fullname, 'birthdate' => $birthDate, 'gender' => $gender, 'khoa' => $khoa));
                            header('location:index.php?controller=admin&action=studentlist');
                        }
                    }
                }
                if(isset($message)) {
                    $this->smarty->assign('message', $message);
                }
            }
            $this->render('admin/add_student.tpl');
        }
    }

    public function editStudent()
    {
            if (isset($_GET['id']) && $_GET['action'] == 'editstudent') {
                $studentRecord = $this->studentEntity->getRecordById($this->studentEntity->getTableName(), $this->studentEntity->getIdField(), $_GET['id']);
                if (isset($_POST['submit'])) {
                    $studentCode = $_POST['studentcode'];
                    $fullname = $_POST['fullname'];
                    $birthDate = $_POST['birthdate'];
                    $gender = $_POST['gender'];
                    $khoa = $_POST['khoa'];
                    $this->studentEntity->editStudentInfo($_GET['id'], array('studentcode' => $studentCode, 'fullname' => $fullname, 'birthdate' => $birthDate, 'gender' => $gender, 'khoa' => $khoa, 'id' => $_GET['id']));
                    header('location: index.php?controller=admin&action=studentlist');
                }
                $this->smarty->assign('studentData', $studentRecord);
            }
            $this->render('admin/edit_student.tpl');
    }

    public function sort() {
        if(isset($_GET['col']) && isset($_GET['type'])) {
            $sortedArr = $this->studentEntity->sortStudent($_GET['col'], $_GET['type']);
            $this->smarty->assign('sortedList', $sortedArr);
            $this->render('admin/sort_student.tpl');
        }
    }

    public function search() {
        echo "Đây là trang search";
    }
}

?>