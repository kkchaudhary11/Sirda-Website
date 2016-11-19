<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gallery_Admin_Add</title>
</head>

<body>
<?php 
include ("header.php");
?>
<div id="main">
<center>
<h3>Gallery Admin Add</h3>
<hr>

<form method="post" action="gallery_update.php" enctype="multipart/form-data">
<table>
<tr><td>Image(1366x500):</td><td> <input type="file" name="x"></td></tr>
<tr><td>Thumnail(242x286):</td><td> <input type="file" name="y"></td></tr>
<tr><td>Title:</td><td><input type="text" name="title"></td></tr>
<tr><td>Description:</td><td><input type="text" name="desc"></td></tr>

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
