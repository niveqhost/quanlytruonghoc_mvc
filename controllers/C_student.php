<?php
include_once 'models/M_student.php';
include_once 'core/C_base.php';

class Student extends BaseController
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

        $this->render('student'.DIRECTORY_SEPARATOR.'student_list.tpl');
    }

    public function removeStudent()
    {
        if ($_GET['action'] == 'removestudent') {
            $this->studentEntity->removeStudent($_GET['id']);
        }
        header('location: index.php?controller=student&action=studentlist');

    }

    public function addStudent()
    {
        if($this->checkSubmit('addstudent')) {
            $allStudent = $this->studentEntity->getAllStudents();
            $prepData = array($_POST['studentcode'], $_POST['fullname'], $_POST['birthdate'], $_POST['gender'], $_POST['khoa'], $_FILES['avatar']['name']);
            $this->validateForm($prepData, $allStudent);
            $this->uploadFile('student-img');
            $this->checkMessage();
            if(isset($this->message)) {
                $this->smarty->assign('addErrMsg', $this->message);
            }
            else {
                $this->studentEntity->addStudent($prepData);
                header('location: index.php?controller=student&action=studentlist');
            }
        }
        $this->render('student'.DIRECTORY_SEPARATOR.'add_student.tpl');
    }

    public function editStudent()
    {
        if(isset($_GET['id']) && $this->checkSubmit('editstudent')) {
            $this->uploadFile('student-img');
            $this->checkMessage();
            // Kiểm tra xem có thông báo lỗi gì không
            if(isset($this->message)) {
                $this->smarty->assign('editErrMsg', $this->message);
            }
            else {
                $this->studentEntity->editStudentInfo($_GET['id'], array('studentcode' => $_POST['studentcode'], 'fullname' => $_POST['fullname'], 'birthdate' => $_POST['birthdate'], 'gender' => $_POST['gender'], 'khoa' => $_POST['khoa'], 'id' => $_GET['id'], 'avatar' => $_FILES['avatar']['name']));
                header('location: index.php?controller=student&action=studentlist');
            }
        }
        $studentRecord = $this->studentEntity->getRecordById($this->studentEntity->getTableName(), $this->studentEntity->getIdField(), $_GET['id']);
        $this->smarty->assign('studentData', $studentRecord);
        $this->render('student'.DIRECTORY_SEPARATOR.'edit_student.tpl');
    }

    public function sortStudent() {
        if($this->checkSortRequest()) {
            $sortedArr = $this->studentEntity->sortStudent($_GET['col'], $_GET['type']);
            $this->smarty->assign('order', $this->studentEntity->order);
            $this->smarty->assign('sortedList', $sortedArr);
            $this->render('student'.DIRECTORY_SEPARATOR.'sort_student.tpl');
        }
    }

}

?>