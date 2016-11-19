<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SIET | Sirda Group Of Institution</title>
<link rel="stylesheet" href="scss.css" type="text/css">


<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

 </head>

<body>
<?php
include("header.php");
?>
<div id="fb-root"></div>



<!--slider script-->
<script src="sliderengine/jquery.js"></script>
<script src="sliderengine/amazingslider.js"></script>
<script src="sliderengine/initslider-1.js"></script>
<!-- slider -->
<div id="amazingslider-1" style="display:block;position:relative;margin:0px auto 0px;">
 <ul class="amazingslider-slides" style="display:none;">
            <li><img src="images/IMAG0316.jpg" /></li>
            <li><img src="images/IMAG0460.jpg" /></li>
            <li><img src="images/IMAG0463.jpg" alt="CLASS ROOMS" data-description="Intractive Class Rooms" /></li>
            <li><img src="images/IMAG0849.jpg" /></li>
            <li><img src="images/IMAG1007.jpg" /></li>
            <li><img src="images/IMAG1049.jpg" /></li>
            
            <li><img src="images/IMAG0421.jpg" alt="COMPUTER LABS" /></li>
            <li><img src="images/sirda01.jpg" alt="Building View" data-description="Intractive Class Rooms" /></li>
</ul>
        <ul class="amazingslider-thumbnails" style="display:none;">
            <li><img src="images/IMAG0316-tn.jpg" /></li>
            <li><img src="images/IMAG0460-tn.jpg" /></li>
            <li><img src="images/IMAG0463-tn.jpg" /></li>
            <li><img src="images/IMAG0849-tn.jpg" /></li>
            <li><img src="images/IMAG1007-tn.jpg" /></li>
            <li><img src="images/IMAG1049-tn.jpg" /></li>
            <li><img src="images/IMAG0421-tn.jpg" /></li>
            <li><img src="images/sirda011.jpg" /></li>
        
        </ul>
</div>
    <!-- End slider -->

<div id="main">
<BR><BR><BR>
</div>
<?php
mysql_connect('localhost','root','');
mysql_select_db('sirda');
?>
<table class="tab1">
<tr style="color:#006"><th width="21%">SOCIAL FEED<hr></th> <th width="1%"></th> 
<th width="21%">NEWS & UPDATES<hr></th> <th width="1%"></th> 
<th width="21%">EVENTS<hr></th> <th width="1%"></th> 
<th width="20%">OUR ALUMINI<hr></th></tr>
<tr height="600px">
<td>
<div class="fb-like-box" data-href="https://www.facebook.com/SirdaGroupOfInstitution" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
<hr>
<a class="twitter-timeline" href="https://twitter.com/kkchaudhary11" data-widget-id="590911115942449152">Tweets by @kkchaudhary11</a>

</td>
<td><hr style="width:.03em; height: 25em; background:#DFDFDF;"></td> 

 <td> 
 No News
 
  </td>  
  
  <td><hr style="width:.03em; height: 25em; background:#DFDFDF;"></td>  
  <td>
  <div>
  <marquee direction="up" height="300" onmouseover="">
  <?php
  $result = mysql_query("SELECT * FROM event");
echo "<table align='center'>";
while($row = mysql_fetch_array($result))
{
  echo "<tr>"."<td>" ."<b>" .$row['title'] . "</b>"."</tr>";
    echo "<tr>"."<td>" .$row['desc'] ."</tr>";
  echo "<tr>"."<td>"  .$row['date']."</tr>";
  echo "<tr>"."<br>"."<tr>";
}
echo "</table>";
?>
</marquee>
</div>

<div>
<h3>RECENT POSTS</h3>
<hr>
  <marquee direction="up" height="170">
<?php
 $result = mysql_query("SELECT * FROM post");

echo "<table cellspacing='20' align= 'center' >";
while($row = mysql_fetch_array($result))
{
  echo "<tr>";
  
  echo "<td>" . $row['title'] . "<br>";
  echo  $row['desc'] . "<br>";
  
  echo  "<a href='$row[link]' class='error'>$row[linkname]</a>" . "<br>";
  echo "<td colspan='3' >" . "<img src='images/$row[image]' width='50' height='50'>" . "</td>";
   
  echo "</tr>";
  
}
echo "</table>";
?>
</marquee>
</div>

  </td> 
  <td><hr style="width:.03em; height: 25em; background:#DFDFDF;"></td> 
  
   <td rowspan="2"> 
 <div > 
<marquee direction="up" height="300">
<?php
$result = mysql_query("SELECT * FROM aluminitable");
echo "<table cellspacing='20' align='center'>";
while($row = mysql_fetch_array($result))
{
  echo "<tr>";
  echo "<td colspan='3'>" . "<img src='images/$row[image]' width='100' height='100'>" . "</td>";
  echo "<td>" . $row['name'] . "<br>";
  echo  $row['branch'] . "<br>";
  echo  $row['marks'] . "</td>";
  echo "</tr>"; 
}
echo "</table>";
?>
</marquee>
</div>

 <div > 
 <h3>OUR PLACEMENT</h3>
 <hr>
 <marquee direction="down" height="170">
<?php
$result = mysql_query("SELECT * FROM industry");
echo "<table cellspacing='20'>";
while($row = mysql_fetch_array($result))
{
  echo "<tr>";
  echo "<img src='images/$row[image]' width='150' height='150'>","&nbsp;","&nbsp;","&nbsp;";
  echo "</tr>";
}
echo "</table>";
?>
 
</marquee>
</div>
</td>
</tr> 
</table>
</div>

<?php
include ("footer.php"); 
?>

</body>
</html>



