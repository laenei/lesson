<?php
class Dashboard extends Controller {
	public function __construct(){
	parent::__construct();
	Session::init();
	$logged = Session::get('loggedIn');
  	if($logged == false) {
   	Session::destroy();
   	header('Location: ../login');
   	exit();
  	}
  	}
  	public function logout() {
 	 Session::destroy();
  	header('Location: ../login');
  	exit();
    }
	public function Index (){
        	#require 'models/login_model.php';
        	#$model = new Login_Model();
        	$this->view->render('dashboard/index');
        }
    }
?>
