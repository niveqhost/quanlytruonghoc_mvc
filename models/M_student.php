<?php

    include_once 'core/M_base.php';
    class M_Student extends Model {

        private $tableName = 'tbl_student';
        private $idField = 'studentid';
        private $nameField = 'fullname';
        private $birthdateField = 'birthdate';
        private $genderField = 'gender';
        private $classField = 'khoa';
        private $codeField = 'studentcode';

        /* ---------- Đã Optimize ---------- */

        public function getAllStudents() {
            return $this->getAllRecords($this->tableName);
        }

        public function removeStudent($id) {
            parent::removeRecord($this->tableName, $this->idField, $id);
        }

        public function addStudent($data = array()) {
            $sql = 'INSERT INTO tbl_student (studentcode, fullname, birthdate, gender, khoa ) VALUES (:studentcode, :fullname, :birthdate, :gender, :khoa)';

            parent::addRecord($sql, $data);
        }

        public function editStudentInfo($id, $data = array()) {
            $studentRecord = $this->getRecordById($this->tableName, $this->idField, $id);

            $sql = "UPDATE `$this->tableName` SET $this->codeField = :studentcode, $this->nameField = :fullname, $this->birthdateField = :birthdate, $this->genderField = :gender, $this->classField = :khoa WHERE $this->idField = :id";

            parent::editRecord($sql, $data);

            return $studentRecord;
        }

        // TODO: Finish Sort list
        public function sortStudent($col, $type) {
            return $this->sortRecord("*", $this->tableName, $col, $type);

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