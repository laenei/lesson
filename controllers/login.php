<?php
class Login extends Controller {
	public function __construct(){
		parent::__construct();
		
	}
	public function Index (){
        	$this->view->render('login/index');
        }
}
?>