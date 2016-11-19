<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include ("header.php"); 
$t=$_GET["t"];

?>
<div id="main"  >
<h3>TEACHER PROGRESS</h3>
<center>
<hr>

<form name="tech_prog" method="post" action="teacher_prog_stored.php" enctype="multipart/form-data">
<table>
<tr><td>Teacher ID </td> <td><input type="text" name="uid" <?php echo "value= '$t' "?>></td></tr>

<tr><td>Subject </td> <td><input type="text" name="sub"></td></tr>
<tr><td colspan="2"><hr></td></tr>

<tr><td>Syllabus Completed </td> <td><input type="number" name="sc" ></td></tr>
<tr><td>Lecture Delivered </td> <td><input type="number" name="ld"></td></tr>

<tr><td colspan="2"><hr></td></tr>
<tr><td>MST1 Result</td> <td><input type="number" name="ct1r"></td></tr>
<tr><td>MST2 Result</td> <td><input type="number"  name="ct2r"></textarea></td></tr>

</table>
<hr>
<input type="submit" value="SUBMIT" class="button">
</form>
<br>
</div>
<?php
include ("footer.php"); 
?>
</body>
</html>