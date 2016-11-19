<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
include ("header.php");
?>

<?php
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$n=$_GET['t2'];

?>
<center>
<br>



<form method="post" action="alumini_admin_upated.php" enctype="multipart/form-data">
<table>
<tr><td>Current Name</td><td><input type="text" name="cname" value=<?php echo $n?>></td></tr>
<tr><td>New Name</td><td><input type="text" name="nname"></td></tr>
<tr><td>Branch</td><td><input type="text" name="branch"></td></tr>
<tr><td>Marks</td><td><input type="text" name="marks"></td></tr>
<tr><td>Image</td><td> <input type="file" name="x" ></td></tr>
</table>
<br>
<input type="submit" value="UPDATE" class="button">
<input type="reset" value="RESET" class="button">
</form>


<?php 
include ("footer.php");
?>
</body>
</html>