<?php
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng Nhập</title>
<link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>
<?php
if($_POST["submit_name"]){
	if($_POST["user"] && $_POST["pass"]){
		$user = $_POST["user"];
		$pass = $_POST["pass"];
	
		$connect_db = mysql_connect("localhost", "root", "");
		$select_db = mysql_select_db("appleshop", $connect_db);
		$set_lang = mysql_query("SET NAMES 'utf8'");
		
		$sql = "SELECT * FROM thanhvien WHERE tai_khoan = '$user' AND mat_khau = '$pass'";
		$query = mysql_query($sql);
		$num_row = mysql_num_rows($query);
		
		if($num_row > 0){
			$_SESSION["user"] = $user;
			$_SESSION["pass"] = $pass;
			header("location:admincp.php");
		}
		else{
			echo "<script>alert('Tài khoản không hợp lệ!')</script>";
		}
	}
}
?>
<?php
if(!$_SESSION["user"] && !$_SESSION["pass"]){
?>
<form method="post">
<table id="login-main" border="0px" cellpadding="0px" cellspacing="0px">
	<tr>
    	<td id="login-navbar" height="36px" colspan="2">đăng nhập hệ thống quản trị</td>
    </tr>
    <tr height="50px">
    	<td id="login-key" rowspan="3" width="150px" align="center" valign="middle"><img src="images/login-key.gif" /></td>
        <td class="login-input">tài khoản<br /><input type="text" name="user" /></td>
    </tr>
    <tr height="50px">
        <td class="login-input">mật khẩu<br /><input type="password" name="pass" /></td>
    </tr>
    <tr height="50px">
        <td id="login-button"><input type="submit" name="submit_name" value="Đăng Nhập" /> <input type="reset" name="reset_name" value="Làm Mới" /></td>
    </tr>
</table>
</form>
<?php
}
else{
	header("location:admincp.php");
}
?>
</body>
</html>