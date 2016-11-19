<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Apply For Job</title>
</head>

<body>
<?php
include ("header.php");
?>
<br>
<center>
<div id="main">
<h3>JOB REGISTRATION</h3>
<hr>
Please provide information in all required fields for user creation. To see vacent seates <a href="vacent_seats.php" class="link"><u>Click Here</u></a>
<BR>
<i>* Denotes a required field</i><br><br>
<div id="form"  style="width:600px">
<form name="reg" method="post" action="">
<table align="center">
<tr><td>First Name* </td> <td><input type="text" name="first_n"></td></tr>
<tr><td>Middle Name </td> <td><input type="text" name="middle_n"></td></tr>
<tr><td>Last Name* </td> <td><input type="text" name="last_n"></td></tr>
<tr><td colspan="2"><hr></td></tr>
<tr><td>Date Of Birth* </td> <td><input type="date" name="dob"></td></tr>
<tr><td>Gender* </td> <td><input type="radio" name="sex" value="male">Male
<input type="radio" name="sex" value="female">Female</td></tr>
<tr><td colspan="2"><hr></td></tr>
<tr><td>Address </td> <td><textarea rows="2" cols="16"  name="add"></textarea></td></tr>

<tr><td>E-mail ID* </td> <td><input type="text" name="email_id"></td></tr>
<tr><td>Postal Code </td> <td><input type="text" name="p_code"></td></tr>
<tr><td>Contact No.*(Primary) </td> <td><input type="tel" name="contact1"></td></tr>
<tr><td>Contact No. (Secondary if any) </td> <td><input type="tel" name="contact2"></td></tr>

<tr><td colspan="2"><hr></td></tr>
<tr><td>Qualification* </td> <td><input type="text" name="qualif"></td></tr>
<tr><td>Experiance </td> <td><input type="text" name="exp"></td></tr>
<tr><td>Designation* </td> <td><input type="text" name="exp"></td></tr>

<tr><td colspan="2"><hr></td></tr>
<tr><td>Salary Expected </td> <td><input type="number" name="salary"></td></tr>
<tr><td>Date of Application</td> <td><input type="date" name="appdate"></td></tr>
<tr><td colspan="2"><hr></td></tr>


<tr><td>Resume </td> <td><input type="file" name="resume"></td></tr>
</table>

<hr>
<input type="submit" value="APPLY" class="button">
</form>
<br>
</div>
</div>
<br><br>





<?php
include ("footer.php"); 
?>

</body>
</html>