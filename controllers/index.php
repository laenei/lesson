<?php
    class Index extends Controller {
        public function __construct() 
        {
            parent::__construct();
            echo "Мы в конроллере INDEX!";
            

        }
        public function Index (){
        	 echo 'INSIDE INDEX INDEX';
        }
        public function Details (){
        	$this->view->render('index/index');
        }
    }
?>