<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Post Update</title>
</head>

<body>
<?php
session_start();
if(isset($_SESSION['user']))
{
	$u=$_SESSION['user'];
}
$img=trim($_FILES['x']['name']);
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$image="images/";
if(move_uploaded_file($_FILES['x']['tmp_name'],$image.$img))
{
	echo "Image uploaded";
}
else
{
	echo "Image not uploaded";
	}
	
$title=$_POST['title'];
$desc=$_POST['desc'];
$link=$_POST['link'];
$linkname=$_POST['linkname'];

mysql_query("insert into post values('$title','$desc','$link','$linkname','$img','$u')");	
echo mysql_error();
echo "<h3>Record inserterd";
?>


</body>
</html>