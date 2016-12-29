<?php
header ("Content-type:text/html;charset=utf8_bin");
if(isset($_POST["sub2"]) && $_POST["sub2"] == "register")
{
$userid= $_POST['user'];
$apw = $_POST['password'];
$a='kisan';
$pw=md5($a.md5($apw));

require_once 'connect.php';
$sql="select U_id, pw from users "
."where U_id = :userid";
$query=$db->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$query->bindParam(':userid', $userid);
$query->execute();
$num=$query->rowCount();
if($num)
{
echo "���û����ѱ�ʹ��";

}
	else
		{
			$sql="insert into users(U_id, pw) values(:userid,:pw) ";
			$query=$db->prepare($sql,array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
			$query->bindParam(':userid', $userid);
            $query->bindParam(':pw', $pw);
            $query->execute();
			if($query)
				{
					echo "注册成功";
				
				}
			else{
					echo "Error";
				}
		}
}
?>