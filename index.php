<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<body>
привет
<?php
$url=$_GET['url'];
$url=rtrim($url,'/');
$url=explode('/',$url);
require_once 'controllers/'.$url[0].'.php';
$controller = new $url[0];
echo $url[1];
/*$url1=htmlspecialchars($url[1], ENT_QUOTES);
$controller->$url1();*/
echo "<br />".$url[0];
echo "<br />".$url[1];
echo "<br />".$url[2];

if (isset($url[2])) {
  $url1=htmlspecialchars($url[1],ENT_QUOTES);
  $url2=htmlspecialchars($url[2],ENT_QUOTES);
  $controller->$url1($url2);
}
else {
    if (isset($url[1])) {
$url1=htmlspecialchars($url[1],ENT_QUOTES);
$controller->$url1();
    }
}
?>
</body>
</html>
