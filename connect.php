<?php
header ("Content-type:text/html;charset=utf8_bin"); 
$dsn="mysql:host=localhost;dbname=KISAN";
$username="root";
$passwd="123456";
try{
$db = new PDO($dsn, $username, $passwd);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec('set names utf8');
//echo "Success";
}
catch(PDOException $e){
  echo  $e->getMessage();
}

?>