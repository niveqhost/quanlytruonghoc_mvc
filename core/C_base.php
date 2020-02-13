<?php
    require_once 'smarty/SmartyBC.class.php';

    class BaseController extends Smarty {
        protected $smarty;
        protected $message;
        protected $error = 0;

        public function __construct()
        {
            $this->smarty = new SmartyBC();
            $smarty_path = dirname(__DIR__ ) . DIRECTORY_SEPARATOR . 'smarty' . DIRECTORY_SEPARATOR;
            $this->smarty->setTemplateDir(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views/');
            $this->smarty->setCompileDir($smarty_path . 'templates_c');
            $this->smarty->setCacheDir($smarty_path . 'cache');
            $this->smarty->setConfigDir($smarty_path . 'configs');
        }

        public function render($view) {
            $this->smarty->display($view);
        }

        public function validateForm($arrayInput, $arrayDB = array())
        {
            if (!(count(array_filter($arrayInput)) === count($arrayInput))) {
                $this->error = 1;
            } else {
                foreach ($arrayDB as $array) {
                    $result = array_diff($arrayInput, $array);
                    if (empty($result)) {
                        $this->error = 2;
                        break;
                    }
                }
            }
        }

        public function checkSubmit($action) {
            if($_GET['action'] === $action) {
                if(isset($_POST['submit'])) {
                    return true;
                }
            }
        }

        public function uploadFile($folder) {
            if (isset($_FILES['avatar'])) {
                // Nếu file upload không bị lỗi,
                // Tức là thuộc tính error > 0
                if($_FILES['avatar']['name'] == '') {
                    $this->error = 3;
                }
                else if ($_FILES['avatar']['error'] > 0)
                {
                    $this->error = 4;
                }
                else {
                    // Upload file
                    move_uploaded_file($_FILES['avatar']['tmp_name'], 'assets'. DIRECTORY_SEPARATOR. 'images'. DIRECTORY_SEPARATOR. $folder . DIRECTORY_SEPARATOR .$_FILES['avatar']['name']);
                }
            }


        }

        public function checkSortRequest() {
            if(isset($_GET['col']) && $_GET['type']) {
                return true;
            }
            else {
                return false;
            }
        }

        public function checkMessage() {
            if( $this->error == 1 ) {
                $this->message = 'Các trường dữ liệu không được để trống';
            }
            else if ( $this->error == 2) {
                $this->message = 'Dữ liệu đã tồn tại trong database';
            }
            else if( $this->error == 3 ) {
                $this->message = 'Bạn chưa chọn ảnh đại diện';
            }
            else if( $this->error == 4 ) {
                $this->message = 'Tải lên tệp tin thất bại';
            }
            return $this->message;
        }
    }
?>
