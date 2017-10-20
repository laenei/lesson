<?php
class Help extends Controller {
    public function __construct() {
    	parent::__construct();
        echo "Мы в контроллее help";
    }
    public function other ($arg=false) {
        echo "мы в методе other";
        echo "Аргумент:".$arg;
    }
}
?>