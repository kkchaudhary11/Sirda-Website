<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
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
	
$fname=$_POST['f_name'];
$mname=$_POST['m_name'];
$lname=$_POST['l_name'];
$dob=$_POST['dob'];
$sex=$_POST['sex'];
$email=$_POST['email_id'];
$add=$_POST['address'];
$pcode=$_POST['p_code'];
$cnop=$_POST['contact1'];
$cnos=$_POST['contact2'];
$qual=$_POST['qual'];
$des=$_POST['des'];
$course=$_POST['course'];
$branch=$_POST['dept'];
$year=$_POST['year'];
$uid=$_POST['user_id'];
$pass=$_POST['password'];

mysql_query("insert into tinfo values('$fname','$mname','$lname','$dob','$sex','$email','$add','$pcode','$cnop','$cnos','$img','$qual','$des','$course','$branch','$year','$uid','$pass')");	
echo mysql_error();
echo "<h3>Record inserterd";
?>
</body>
</html>

