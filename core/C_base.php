<?php
    require_once 'smarty/Smarty.class.php';

    class BaseController extends Smarty {
        protected $smarty;

        public function __construct()
        {
            $this->smarty = new Smarty();
        }

        public function render($view) {
            $smarty_path = dirname(__DIR__ ) . DIRECTORY_SEPARATOR . 'smarty' . DIRECTORY_SEPARATOR;
//            echo dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views';
            $this->smarty->setTemplateDir(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views/');
            $this->smarty->setCompileDir($smarty_path . 'templates_c');
            $this->smarty->setCacheDir($smarty_path . 'cache');
            $this->smarty->setConfigDir($smarty_path . 'configs');
            $this->smarty->display($view);
        }

        public function
    }

?>
