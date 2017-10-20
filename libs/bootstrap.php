<?php
  class Bootstrap {
   public function __construct() {
    $url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    $file = 'controllers/'.$url[0].'.php';
    if(file_exists($file)) {
     require $file;
    } else {
     require 'controllers/erka.php';
     #require 'controllers/error.php';
     $controller = new Error();
     return false;
    }
    $controller = new $url[0];
    if(isset($url[2])) {
  $url1=htmlspecialchars($url[1],ENT_QUOTES);
  $url2=htmlspecialchars($url[2],ENT_QUOTES);
     $controller->$url1($url2);
    } else {
     if(isset($url[1])) {
     	$url1=htmlspecialchars($url[1],ENT_QUOTES);
      $controller->$url1();
     }
    }
   }
  }
?>