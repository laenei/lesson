<?php
class Help {
    public function __construct() {
        echo "Мы в контроллее help";
    }
    public function other ($arg=false) {
        echo "мы в методе other";
        echo "Аргумент:".$arg;
    }
}
?>