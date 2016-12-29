<?php
session_start();
header ("Content-type:text/html;charset=utf8_bin");
if(isset($_POST["sub3"]) && $_POST["sub3"] == "log out")
{unset($_SESSION['userid']);
echo "注销成功";}
else
{
 echo "error";
}
?>