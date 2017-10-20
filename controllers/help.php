<?php
class Help extends Controller {
    public function __construct() {
    	parent::__construct();
        echo "Мы в контроллее help";
    }
    public function other ($arg=false) {
        require 'models/help_model.php';
        $model=new Help_Model();
 	
    }
}
?>
