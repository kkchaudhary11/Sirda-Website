<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Request Information</title>

</head>

<body>
<?php
include ("header.php");
?>

<div id="main">
<h3>REQUEST INFORMATION</h3>
<hr>
<center>
Thank you for your interest and desire to pursue a degree/deploma at SIRDA  College of Engineering.
Please provide details below to :<br>
<i>We will send you an informational package detailing your program of interest</i>
<br/><br>
<div id="form" style="width:600px">
<table align="center">
<tr><td>Name(required):</td></tr>
<tr><td><input type="text" size="50px"></td></tr>
<tr><td>Address:</td></tr>
<tr><td><input type="text" size="50px"></td></tr>
<tr><td>City/State:</td></tr>
<tr><td><input type="text" size="50px"></td></tr>
<tr><td>Country:</td></tr>
<tr><td><input type="text" size="50px" value="India"></td></tr>
<tr><td>Postal Code:</td></tr>
<tr><td><input type="number" size="50px"></td></tr>
<tr><td>E-mail(required):</td></tr>
<tr><td><input type="email" size="50px"></td></tr>
<tr><td>Telephone:</td></tr>
<tr><td><input type="tel" size="50px"></td></tr>
<tr><td>Academic session and year which you intend to enroll:</td></tr>
<tr>
<td><select name="course">
<option name='department'></option>
<option name='department'>Diploma</option> 
<option name='department'>B.Tech</option> 
<option name='department'>M.Tech.</option>  
<option name='department'>D Pharmacy</option>  
</select>

<select name="department">
<option name='department'></option>
<option name='department'>CE</option> 
<option name='department'>CSE</option> 
<option name='department'>ECE</option>  
<option name='department'>EEE</option> 
<option name='department'>ME</option> 
<option name='department'>OFFICE</option> 
<option name='department'>APPLIED SCIENCE</option>
<option name='department'>D PHARMACY</option> 
</select>
<select name="year">
<option name='department'></option>
<option name='department'>1st</option> 
<option name='department'>2nd</option> 
<option name='department'>3rd</option>  
<option name='department'>4th</option>  
</select></td>
</tr>
<tr><td>Questions / Comments</td></tr>
<tr><td><textarea rows="2" cols="39"></textarea></td></tr>
</table>
<input type="submit" value="SEND" class="button">
<input type="reset" value="RESET" class="button">
</form>
<br><br>
</div>
<br><br>
</div>

<?php
include ("footer.php"); 
?>

</body>
</html>