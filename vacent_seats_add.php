<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>vacent_seats_admin</title>
</head>

<body>

<?php 
include ("header.php");
?>
<div id="main">
<center>
<h3>Vacent Seats Add</h3>
<hr>

<form method="post" action="vacentseats_admin_update.php" enctype="multipart/form-data">
<table>
<tr><td>Department</td>
<td ><select name="department">
<option name='department'></option>
<option name='department'>CE</option> 
<option name='department'>CSE</option> 
<option name='department'>ECE</option>  
<option name='department'>EEE</option> 
<option name='department'>ME</option> 
<option name='department'>OFFICE</option> 
<option name='department'>APPLIED SCIENCE</option>
<option name='department'>D PHARMACY</option> 
</select></td></tr>
<tr><td>Designation</td><td><input type="text" name="designation"></td></tr>
<tr><td>Seats</td><td><input type="number" name="seats"></td></tr>
</table>
<br>
<input type="submit" value="ADD">
<input type="reset" value="RESET">
</form>
<br>
</div>
<br><br>
</div>

<?php 
include ("footer.php");
?>
</body>
</html>