<?php 
$cookie_name="user";
$cookie_value="Hammad Muntazir";

setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--  creating cookie by setcookie(name,value,expire,path,domain,secure,httponly) -->
      <!-- view cookie value  -->
 <?php
 if(!isset($_COOKIE[$cookie_name])){
 echo "Cookie is not set";
 }else{
    echo $_COOKIE[$cookie_name];
 }

?>

</body>
</html>
