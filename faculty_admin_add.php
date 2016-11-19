<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Faculty Update</title>

<link rel="stylesheet" href="scss.css" type="text/css">
<link rel="shortcut icon" href="images/title_icon.ico" >
</head>

<body style="margin:0%">

<?php
include ("header.php");
?>


<div id="main">
<h3>Faculty Update</h3>
<hr>
<center>
<form method="post" action="faculty_update.php" enctype="multipart/form-data">
<table>
<tr>
<td> Department:</td>
<td ><select name="department">
<option name='department'></option>
<option name='department'>CE</option> 
<option name='department'>CSE</option> 
<option name='department'>ECE</option>  
<option name='department'>EEE</option> 
<option name='department'>ME</option> 
</select></td></tr>
<tr>
<td> Name:</td><td><input type="text" name="name" size="30px" /></td></tr>
<tr>
<td> Designation:</td><td><input type="text" name="desingnation" size="30px" /></td>
</tr>
<tr>
<td> Qualification:</td><td><input type="text" name="qualification" size="30px" /></td>
</tr>
<tr>
<td> Email_Id:</td><td><input type="email" name="email_id" size="30px" /></td>
</tr>

<tr>
<td> Contact:</td><td><input type="text" name="contact" size="30px" /></td></tr>
<tr><td>Image</td><td> <input type="file" name="ph"></td></tr>
</table>
<br>
<input type="submit" value="ADD" class="button">
<input type="reset" value="RESET" class="button">

</form>
</div>
</center>
<br><br>
<?php
include ("footer.php"); 
?>
</body>
</html>