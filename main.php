
<?php
header ("Content-type:text/html;charset=utf8_bin");
session_start();
if(isset($_SESSION["userid"]))
{
echo "登陆成功";
}
else{
	
	header("location: relogin.php");
}

?> 
<!DOCTYPE html>
<html>
<body>
<form name = "logon" method = "post" action="Logout.php">
<input type = "submit" name="sub3" value = "log out">
</form>
</body>
</html>