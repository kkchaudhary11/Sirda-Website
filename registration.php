<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>

</head>
<body>
<script>
if (first_n="")
alert("enter name");

reg.submit;
</script>

<?php
include ("header.php");
?>
<br>
<center>
<div id="main"  >
<h3>USER REGISTRATION</h3>
<hr>
Please provide information in all required fields for user creation.  OR <a href="login.php" class="link">LOG IN</a>
<BR>
<i>* Denotes a required field</i><br><br>
<div id="form" style="width:600px">
<form name="reg" method="post" action="registrated.php" enctype="multipart/form-data">
<table>
<tr><td>First Name* </td> <td><input type="name" name="f_name"></td></tr>
<tr><td>Middle Name </td> <td><input type="text" name="m_name"></td></tr>
<tr><td>Last Name* </td> <td><input type="text" name="l_name"></td></tr>
<tr><td colspan="2"><hr></td></tr>
<tr><td>Date Of Birth* </td> <td><input type="date" name="dob"></td></tr>
<tr><td>Gender* </td> <td><input type="radio" name="sex" value="male">Male
<input type="radio" name="sex" value="female">Female

</td></tr>
<tr><td colspan="2"><hr></td></tr>
<tr><td>E-mail ID* </td> <td><input type="email" name="email_id"></td></tr>
<tr><td>Address </td> <td><textarea rows="2" cols="16"  name="address"></textarea></td></tr>
<tr><td>Postal Code </td> <td><input type="number" name="p_code"></td></tr>
<tr><td>Contact No.*(Primary) </td> <td><input type="tel" name="contact1"></td></tr>
<tr><td>Contact No. (Secondary if any) </td> <td><input type="tel" name="contact2"></td></tr>
<tr><td>Profile Picture</td><td><input type="file" name="pp"></td></tr>
<tr><td colspan="2"><hr></td></tr>
<tr>
<td> Course</td>
<td ><select name="course" style="width:60%">
<option name='department'></option>
<option name='department'>B.Tech</option> 
<option name='department'>Diploma</option> 
<option name='department'>M.Tech</option>  
<option name='department'>D.Pharmacy</option> 
</select></td>
</tr>
<tr>
<td> Branch</td>
<td ><select name="dept">
<option name='department'></option>
<option name='department'>CE</option> 
<option name='department'>CSE</option> 
<option name='department'>ECE</option>  
<option name='department'>EEE</option> 
<option name='department'>ME</option> 
<option name='department'>APPLIED SCIENCE</option>  
</select>
</td></tr>
<tr><td>
Year</td><td><input type="text" name="year">
</td></tr>

<tr><td colspan="2"><hr></td></tr>

<tr><td>Roll No.* </td> <td><input type="number" name="rollno"></td></tr>
<tr><td>Sirda ID* </td> <td><input type="text" name="sirda_id"></td></tr>
<tr><td>User ID* </td> <td><input type="text" name="user_id"></td></tr>
<tr><td>Password* </td> <td><input type="password" name="password"></td></tr>
<tr><td>Confirm Password* </td> <td><input type="password" name="c_password"></td></tr>
</table>
<hr>
<input type="submit" value="SIGN UP" class="button">
</form>
<br>
</div>
</div>
<br>
<?php
include ("footer.php"); 
?>

</body>
</html>