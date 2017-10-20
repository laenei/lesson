<?php
  class Bootstrap {
   public function __construct() {
    $url=isset($_GET['url']) ? $_GET['url'] : null;
    #$url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    $file = 'controllers/'.$url[0].'.php';
    $url0=htmlspecialchars($url[0],ENT_QUOTES);
    if ($url0=='index.php'){
    	require 'controllers/index.php';
    	$controller= new Index();
    	$contoller->index();
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
    $controller->loadModel($url0);
    
    if(isset($url[2])) {
    	if(method_exists($controller, $url[1])){
  $url1=htmlspecialchars($url[1],ENT_QUOTES);
  $url2=htmlspecialchars($url[2],ENT_QUOTES);
     $controller->$url1($url2);} else {echo 'Error';}
    } else {
     if(isset($url[1])) {
     	$url1=htmlspecialchars($url[1],ENT_QUOTES);
      $controller->$url1();
     } else { $controller->index(); }
    }
   }
  }
?>
