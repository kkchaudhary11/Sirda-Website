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
<div id=main>
<center>
<h3>Search Students</h3>
<div id=form style="width:700px">
<br>

<table>
<tr><td><b>Search By Department-</b></td><td></td><td rowspan="5" width="50"><hr style="width:.03em; height: 5em; background:#DFDFDF;"></td><td><b>Search by Name-</b></td></tr>
<tr></tr>
<tr><td> Course</td>
<td ><select name="course" style="width:155px">
<option name='department'></option>
<option name='department'>B.Tech</option> 
<option name='department'>Diploma</option> 
<option name='department'>M.Tech</option>  
<option name='department'>D.Pharmacy</option> 
</select></td>
<td>Name <input type="text" name="nme"></td>
</tr>
<tr>
<td> Branch</td>
<td ><select name="dept" style="width:155px">
<option name='department'></option>
<option name='department'>CE</option> 
<option name='department'>CSE</option> 
<option name='department'>ECE</option>  
<option name='department'>EEE</option> 
<option name='department'>ME</option> 
<option name='department'>APPLIED SCIENCE</option>  
</select>
</td>
<td align="center"><input type="submit" value="SEARCH" class="button"></td></tr>
<tr><td>Year</td><td><input type="text" name="year"></td></tr>
<tr align="center"><td colspan="2"><input type="submit" value="SEARCH" class="button"></td></tr>
</table>
<br>
</div>
<br>
</div>

<?php
include ("footer.php");
?>
</body>
</html>