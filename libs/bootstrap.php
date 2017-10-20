<?php
  class Bootstrap {
   public function __construct() {
    $url=isset($_GET['url']) ? $_GET['url'] : null;
    #$url = $_GET['url'];
    echo $url;
    $url = rtrim($url, '/');
    echo $url;
    $url = explode('/', $url);
    echo $url[0];
    $file = 'controllers/'.$url[0].'.php';
    if ($url[0]='index.php'){
    	require 'controllers/index.php';
    	$controller= new Index();
    	return false;
    }
    if(file_exists($file)) {
     require $file;
    } else {
     require 'controllers/erka.php';
     #require 'controllers/error.php';
     $controller = new Erroronpage();
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