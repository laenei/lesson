<?php
  class Erroronpage extends Controller {
   public function __construct() {
   	parent::__construct();
    #echo "Контроллер обработки ошибок";
 	$this->view->msg = 'Страницы не существует!';
    $this->view->render('error/index');
   }
  }
?>