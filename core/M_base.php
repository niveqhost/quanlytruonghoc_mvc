<?php

    class Model {
        private $server = "mysql:host=localhost;dbname=schooldb";
        private $user = "root";
        private $password = "";
        protected $connect = NULL;

        public function __construct() {
           try {
                $this->connect = new PDO($this->server, $this->user, $this->password);
                $this->connect->exec("SET NAMES 'utf8'");
                // echo "Kết nối thành công";
            }
            catch(PDOException $ex) {
                echo 'Lỗi trong quá trình kết nối: ' . $ex->getMessage();
            }
            return $this->connect;
        }

        public function getAllRecords($tableName) {
            $sql = "SELECT * FROM `$tableName`";

            $stmt = $this->connect->prepare($sql);
            $stmt->execute();
            if($stmt->rowCount() > 0) {
                $allRecords = array();
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $allRecords[] = $row;
                }
    
                return $allRecords;
            }

            // close connection to database
            $this->connect = NULL;
        }

        public function getRecordById($table, $idField, $id) {
            $sql = "SELECT * FROM `{$table}` WHERE `{$idField}` = :id";

            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(":id", $id);

            $stmt->execute();

            if($stmt->rowCount() > 0) {
                $singleRecord = array();
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $singleRecord[] = $row;
                }
                return $singleRecord;
            }

            // close connection to database
            $this->connect = NULL;
        }

        public function removeRecord($tableName, $idField, $id) {
            $sql = "DELETE FROM `$tableName` WHERE `{$idField}` = :id";
            $stmt = $this->connect->prepare($sql);
            $stmt->bindParam(":id", $id);

            $stmt->execute();

            // close connection to database
            $this->connect = NULL;
        }

        public function addRecord($sql, $data = array()) {
            $stmt = $this->connect->prepare($sql);

            $stmt->execute($data);

            // close connection to database
            $this->connect = NULL;
        }

        public function editRecord($sql, $data = array()) {
            $stmt = $this->connect->prepare($sql);

            $stmt->execute($data);
            
            // close connection to database
            $this->connect = NULL;
        }
        // TODO: Finish sort function
        public function sortRecord($column, $table, $columnSort, $order) {
//            $sql = 'SELECT studentid FROM tbl_student ORDER BY studentid DESC';
            $sql = "SELECT $column FROM $table ORDER BY" . " $columnSort " . " $order ";
            // echo $sql;

            $stmt = $this->connect->prepare($sql);

            $stmt->execute();

            if($stmt->rowCount() > 0) {
                $allRecords = array();
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $allRecords[] = $row;
                }

                return $allRecords;
            }

            // close connection to database
            $this->connect = NULL;
        }
    }

?>