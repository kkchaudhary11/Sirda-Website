<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Post_Admin_Add</title>
</head>

<body>
<?php 
session_start();
include ("header.php");
?>
<div id="main">
<center>
<h3>Post Update</h3>
<hr>

<form method="post" action="post_update.php" enctype="multipart/form-data">
<table>

<tr><td>Title</td><td><input type="text" name="title"></td></tr>
<tr><td>Description</td><td><textarea rows="3" cols="16" name="desc"></textarea></td></tr>
<tr><td>Link</td><td><input type="url" name="link" value="(optional)" onclick="this.value=''"></td></tr>
<tr><td>Link Name</td><td><input type="text" name="linkname"></td></tr>

<tr><td>Image</td><td> <input type="file" name="x"></td></tr>
</table>
<br>
<input type="submit" value="POST" class="button">
<input type="reset" value="RESET" class="button">
</form>
<br><br>
</div>

<?php 
include ("footer.php");
?>
</body>
</html>
