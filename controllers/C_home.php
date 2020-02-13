<?php
	include_once 'core/C_base.php';
    class Home extends BaseController {
        public function index() {
            $this->render('home'.DIRECTORY_SEPARATOR.'index.tpl');
        }

        public function login() {
	        $this->render('home'.DIRECTORY_SEPARATOR.'login.tpl');
        }
    }
?>