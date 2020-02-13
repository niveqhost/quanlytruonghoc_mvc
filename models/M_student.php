<?php

    include_once 'core/M_base.php';
    class M_Student extends Model {

        private $tableName = 'tbl_student';
        private $idField = 'studentid';
        private $nameField = 'fullname';
        private $birthdateField = 'birthdate';
        private $genderField = 'gender';
        private $classField = 'idkhoa';
        private $codeField = 'studentcode';
        private $avatarField = 'avatar';

        /* ---------- Đã Optimize ---------- */

        public function getAllStudents() {
            return $this->getAllRecords($this->tableName);
        }

        public function removeStudent($id) {
            parent::removeRecord($this->tableName, $this->idField, $id);
        }

        public function addStudent($data = array()) {
            $column = array($this->codeField, $this->nameField, $this->birthdateField, $this->genderField, $this->classField, $this->avatarField);

            $sql = "INSERT INTO $this->tableName ( ". implode(', ', $column) . ' ) VALUES ( ' . implode(', ', array_map(array($this, 'returnQuestionMark'), $column)). ')';
            $this->add_edit_Record($sql, $data);
        }

        public function editStudentInfo($id, $data = array()) {
            $studentRecord = $this->getRecordById($this->tableName, $this->idField, $id);
            $sql = "UPDATE `$this->tableName` SET $this->codeField = :studentcode, $this->nameField = :fullname, $this->birthdateField = :birthdate, $this->genderField = :gender, $this->classField = :khoa, $this->avatarField = :avatar WHERE $this->idField = :id";
            $this->add_edit_Record($sql, $data);
            return $studentRecord;
        }

        public function sortStudent($col, $type) {
            return $this->sortRecord('*', $this->tableName, $col, $type);
        }

        public function getTableName() {
            return $this->tableName;
        }

        public function getIdField() {
            return $this->idField;
        }

        public function getNameField() {
            return $this->nameField;
        }

        public function getClassField() {
            return $this->classField;
        }

    }
?>