<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$img=trim($_FILES['ph']['name']);
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$image="images/";
if(move_uploaded_file($_FILES['ph']['tmp_name'],$image.$img))
{
	echo "Image uploaded";
	}
else
{
	echo "Image not uploaded";
	}
	
$name=$_POST['name'];
$desig=$_POST['desingnation'];
$qualif=$_POST['qualification'];
$email=$_POST['email_id'];
$contact=$_POST ['contact'];
$dept=$_POST ['department'];

mysql_query("insert into facultytable values('$dept','$name','$desig','$qualif','$email','$contact','$img')");	
echo mysql_error();
echo "<h3>Record inserterd";


	?>

</body>
</html>