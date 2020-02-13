<?php
    include_once 'models/M_Teacher.php';
    include_once 'core/C_base.php';

    class Teacher extends BaseController {
        private $teacherEntity;

        public function __construct()
        {
            parent::__construct();
            $this->teacherEntity = new M_Teacher();
        }

        public function teacherList() {
            $allTeachers = $this->teacherEntity->getAllTeachers();
            if (!empty($allTeachers)) {
                $this->smarty->assign('allTeachers', $allTeachers);
            }
            $this->render('teacher'.DIRECTORY_SEPARATOR.'teacher_list.tpl');
        }

        public function addTeacher() {
            if($this->checkSubmit('addteacher')) {
                $prepData = array($_POST['fullname'], $_POST['subject'], $_POST['birthdate'], $_POST['gender'], $_FILES['avatar']['name']);
                $allTeacher = $this->teacherEntity->getAllTeachers();
                $this->uploadFile('teacher-img');
                $this->validateForm($prepData, $allTeacher);
                $this->checkMessage();
                if(isset($this->message)) {
                    $this->smarty->assign('message', $this->message);
                }
                else {
                    $this->teacherEntity->addTeacher($prepData);
                    header('location: index.php?controller=teacher&action=teacherlist');
                }
            }
            $this->render('teacher'.DIRECTORY_SEPARATOR.'add_teacher.tpl');
        }

        public function editTeacher() {
            if(isset($_GET['id']) && $this->checkSubmit('editteacher')) {
                $this->uploadFile('teacher-img');
                $this->teacherEntity->editTeacherInfo($_GET['id'], array('tengiaovien' => $_POST['fullname'], 'bomon' => $_POST['subject'], 'ngaysinh' => $_POST['birthdate'], 'gioitinh' => $_POST['gender'], 'anhdaidien' => $_FILES['avatar']['name'], 'id' => $_GET['id']));
                header('location: index.php?controller=teacher&action=teacherlist');
            }
            $teacherRecord = $this->teacherEntity->getRecordById($this->teacherEntity->getTableName(), $this->teacherEntity->getIdField(), $_GET['id']);
            $this->smarty->assign('teacherData', $teacherRecord);
            $this->render('teacher'.DIRECTORY_SEPARATOR.'edit_teacher.tpl');
        }

        public function removeTeacher() {
            if ($_GET['action'] == 'removeteacher') {
                $this->teacherEntity->removeTeacher($_GET['id']);
            }
            header('location: index.php?controller=teacher&action=teacherlist');
        }

        public function sortTeacher() {
            if($this->checkSortRequest()) {
                $sortedArr = $this->teacherEntity->sortTeacher($_GET['col'], $_GET['type']);
                $this->smarty->assign('order', $this->teacherEntity->order);
                $this->smarty->assign('sortedList', $sortedArr);
                $this->render('teacher'.DIRECTORY_SEPARATOR.'sort_teacher.tpl');
            }
        }
    }
?>