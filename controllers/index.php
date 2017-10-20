<?php
    class Index extends Controller {
        public function __construct() 
        {
            parent::__construct();
            echo "Мы в конроллере INDEX!";
            $this->view->render('index/index');

        }
    }
?>