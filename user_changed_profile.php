<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
<?php
session_start();

if(isset($_SESSION['user']))
{
	$u=$_SESSION['user'];
$img=trim($_FILES['pp']['name']);
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$image="images/";
if(move_uploaded_file($_FILES['pp']['tmp_name'],$image.$img))
{
	echo "Image uploaded";
	}
else
{
	echo "Image not uploaded";
	}

$email=$_POST['email_id'];
$add=$_POST['address'];
$pcode=$_POST['p_code'];
$cnop=$_POST['contact1'];
$cnos=$_POST['contact2'];
$year=$_POST['year'];

mysql_query("UPDATE sinfo SET email='$email',address='$add',pcode='$pcode',cnop='$cnop',cnos='$cnos',pp='$img',year='$year' WHERE userid='$u'");

echo mysql_error();
echo "<h3>Record inserterd";
}
?>
</body>
</html>