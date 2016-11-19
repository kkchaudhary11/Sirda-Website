<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</head>

<body>
<?php
$a=$_POST['username'];
$b=$_POST['password'];
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$abc=mysql_query("select * from tinfo where uid='$a' and pass='$b'");
$row = mysql_fetch_array($abc);

$ac=mysql_num_rows($abc);
if($ac>=1)
{
	session_start();
    $_SESSION['user']=$a;
	if ($row['des']=='HOD')
	{
		include ("hod.php");
	}
	else
	{
	include ("teacher.php");
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