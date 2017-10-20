<?php
class Login extends Controller {
	public function __construct(){
		parent::__construct();
		
	}
	public function Index (){
        	require 'models/login_model.php';
        	$model = new Login_Model();
        	$this->view->render('login/index');
        }
}
?>