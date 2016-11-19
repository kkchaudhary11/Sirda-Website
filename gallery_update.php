<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gallery Update</title>
</head>

<body>
<?php

$img=trim($_FILES['x']['name']);
$thumb=trim($_FILES['y']['name']);
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$image="images/";
if((move_uploaded_file($_FILES['x']['tmp_name'],$image.$img))  && (move_uploaded_file($_FILES['y']['tmp_name'],$image.$thumb)))
{
	echo "Image uploaded";
	}
else
{
	echo "Image not uploaded";
	}
	
$title=$_POST['title'];
$desc=$_POST['desc'];

mysql_query("insert into gallery values('$img','$thumb','$title','$desc')");	
echo mysql_error();
echo "<h3>Record inserterd";


	?>



</body>
</html>