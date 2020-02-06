<?php
	include_once 'core/C_base.php';
    class Home extends BaseController {
        public function index() {
            $this->render('home/index.tpl');
        }

        public function login() {
	        $this->render('home/login.tpl');
        }
    }
?>