<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$img=trim($_FILES['x']['name']);
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$cname=$_POST['cname'];
$image="images/";
if(move_uploaded_file($_FILES['x']['tmp_name'],$image.$img))
{
	echo "Image uploaded";
	}
else
{
	echo "Image not uploaded";
	}
	

$name=$_POST['nname'];
$branch=$_POST['branch'];
$marks=$_POST['marks'];

mysql_query("update aluminitable set('$name','$branch','$marks','$img') where name=$cname");	
echo mysql_error();
echo "<h3>Record inserterd";
?>



</body>
</html>