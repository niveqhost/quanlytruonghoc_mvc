<?php
    include_once 'core/M_base.php';

    class M_Teacher extends Model {

        private $tableName = 'tbl_giaovien';
        private $nameField = 'tengiaovien';
        private $idField = 'giaovienid';
        private $birthDateField = 'ngaysinh';
        private $genderField = 'gioitinh';
        private $subjectField = 'bomon';
        private $avatarField = 'anhdaidien';

        public function getAllTeachers() {
            return $this->getAllRecords($this->tableName);
        }

        public function removeTeacher($id)
        {
            parent::removeRecord($this->tableName, $this->idField, $id);
        }

        public function editTeacherInfo($id, $data = array()) {
            $teacherRecord = $this->getRecordById($this->tableName, $this->idField, $id);
            $sql = "UPDATE `$this->tableName` SET $this->nameField = :tengiaovien, $this->subjectField = :bomon, $this->birthDateField = :ngaysinh, $this->genderField = :gioitinh, $this->avatarField = :anhdaidien WHERE $this->idField = :id";
            $this->add_edit_Record($sql, $data);
            return $teacherRecord;
        }

        public function addTeacher($data = array()) {
            $column = array($this->nameField, $this->subjectField, $this->birthDateField, $this->genderField, $this->avatarField);
            $sql = "INSERT INTO $this->tableName ( ". implode(', ', $column) . ' ) VALUES ( ' . implode(', ', array_map(array($this, 'returnQuestionMark'), $column)). ')';
            $this->add_edit_Record($sql, $data);
        }

        public function sortTeacher($col, $type)
        {
            return $this->sortRecord('*', $this->tableName, $col, $type);
        }

        public function getTableName()
        {
            return $this->tableName;
        }

        public function getIdField()
        {
            return $this->idField;
        }


    }

?>