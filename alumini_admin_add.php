<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
include ("header.php");
?>
<div id="main">
<center>
<h3>Alumini Update</h3>
<hr>

<form method="post" action="alumini_update.php" enctype="multipart/form-data">
<table>
<tr><td>Sirda ID</td><td><input type="text" name="sid"></td></tr>
<tr><td>Marks</td><td><input type="text" value="%" name="marks"></td></tr>
</table>
<br>
<input type="submit" value="ADD" class="button">
<input type="reset" value="RESET" class="button">
</form>
<br><br>
</div>

<?php 
include ("footer.php");
?>
</body>
</html>