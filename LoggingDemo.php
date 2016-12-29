<!DOCTYPE html>
<html>
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<body>

<h1>Applet Demo</h1>

<form name = "logon" method = "post" action="login.php">
<table>
<tr>
<td colspan = "2">Logging Page</td>
</tr>
<tr>
<td>Accounnt ID</td>
<td><input type = "text" name = "user" size = "16"/></td>

</tr>
<tr>
<td>Password</td>
<td><input type = "password" name = "password" size = "16"/></td>
</tr>
<tr>
<td>Verification code
<input type="text" name="passcode" size="8" ><img name="validate" onclick="validate.src+='?' + Math.random();" src="verifycode.php"  alt="click to refresh"/>  
</td>
</tr>
<tr>
<td><input type = "submit" name="sub1" value = "login"/> </td>
<td><input name="reset" type="reset"  value="reset"/> </td>
</tr>
<tr>
<td>Haven't gotten an account? </td>
</tr>
<tr>
<td>Click register to sign up!</td>
</tr>
<tr>
<td><a href="register.php">register</a> </td>
</tr>
</table>
</form> 

</body>
</head>
</html>