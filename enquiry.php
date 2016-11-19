<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enquiry</title>
<link rel="stylesheet" href="scss.css" type="text/css">
<link rel="shortcut icon" href="images/title_icon.ico" >
</head>

<body style="margin:0%">

<?php
include ("header.php");
?>


<div id="main">
<center>
<h3>Enquiry Form</h3>
<hr>
<i>Please fill the fields below to send an enquiry:</i>
<br><br>
<div id="form" style="width:600px">
<form method="post" action="enquiry_send.php">
<br>
<table>
<tr><td>Name:</td><td><input type="text" name="name" size="30px" /></td></tr>
<tr><td>Email Address:</td><td><input type="text" name="email" size="30px" /></td></tr>
<tr><td>Phone Number:</td><td><input type="text" name="phno" size="30px" /></td></tr>
<tr><td>Subject:</td><td><input type="text" name="sub" size="30px" /></td></tr>
<tr><td>Query:</td><td><textarea rows="5" cols="24" name="query" /></textarea></td></tr>
</table>

<input type="submit" value="Send" class="button"><input type="reset" value="Reset" class="button">
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
