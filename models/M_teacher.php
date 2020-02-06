<?php
    include_once 'core/M_base.php';

    class M_Teacher extends Model{

        private $tableName = 'tbl_giaovien';

        public function getAllStudents() {
            return $this->getAllRecords($this->tableName);
        }
    }

?>