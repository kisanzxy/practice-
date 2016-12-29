<?php
session_start();
 require_once('connect.php');
 //get users' input
$userid= $_POST['user'];
$apw = $_POST['password'];
$a='kisan';
$pw=md5($a.md5($apw));
$inputcode=$_POST['passcode'];
//implement sql statement
$sql="select U_id, pw from users "
."where U_id = :userid and pw= :pw";
$query=$db->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$query->bindParam(':userid', $userid);
$query->bindParam(':pw', $pw);
$query->execute();
$num=$query->rowCount();
if($inputcode==$_SESSION['code'])
{
    if($num)
      {
          $_SESSION['userid']=$_SESSION['code'];
          header("location: main.php");
      }
    else
      {
           echo "wrong user id or password";
      }
 
 }
else
{
    echo "wrong verification code";
}

?> 