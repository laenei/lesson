<?php
class Login_Model extends Model{
	public function __construct()
 {
		#echo '111';
 }
	public function run()
 {
	$sth=$this->db->prepare("select id from users where login = :login and password = MD5(:password)");
	$sth->execute(array(
    ':login' => $_POST['login'],
    ':password' => $_POST['password']
    ));

    $data = $sth->fetchAll();
    $count = $sth = rowCount();
    
    if($count > 0) {
    Session::init();
    Session::set('loggedIn', true);
    header('Location: ../dashboard');
    } 
    else 
    {
    header('Location: ../login');

	}
 }
}
?>
