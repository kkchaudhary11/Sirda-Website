<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function display()
{
	alert("Invalid user");
	return;
}
</script>
</head>

<body>
<?php
$a=$_POST['username'];
$b=$_POST['password'];
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$abc=mysql_query("select * from sinfo where userid='$a' and pass='$b'");
$ac=mysql_num_rows($abc);
if($ac>=1)
{
	if(($a==="admin") && ($b==="1231"))
	{
	include("admin.php");
	}
	else
	{
	session_start();
    $_SESSION['user']=$a;
	include ("user.php");
	
	
	}
}
else
{
	echo"Wrong password/UserName";

	echo "<a href='login.php'> try again!</a>";
}
?>


</body>
</html>