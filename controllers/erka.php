<?php
  class Erroronpage extends Controller {
   public function __construct() {
   	parent::__construct();
    #echo "Контроллер обработки ошибок";
   }
  	public function Index (){
        	$this->view->msg = 'Страницы не существует!';
    		$this->view->render('error/index');
        }
  }
?>