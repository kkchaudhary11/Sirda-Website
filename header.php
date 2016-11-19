<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="scss.css" type="text/css">
<link rel="shortcut icon" href="images/title_icon.ico" >

<link rel="stylesheet" href="styles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>
<script class="cssdeck" src="headershrink.js"></script>
<script>
$(function(){
 var shrinkHeader = 300;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           $('.header').addClass('shrink');
        }
        else {
            $('.header').removeClass('shrink');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});
</script>
<script>
$(function(){
 var shrinkHeader = 300;
  $(window).scroll(function() {
    var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
           $('.header2').addClass('shrink');
        }
        else {
            $('.header2').removeClass('shrink');
        }
  });
function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
    }
});
</script>

</head>

<body>
<div class="header">
<ul class="ulh">
<li class="lih">
<?php
if(isset($_SESSION['user']))
{
	$n=$_SESSION['user'];
mysql_connect('localhost','root','');
mysql_select_db('sirda');
$name=mysql_query("select * from sinfo where userid='$n'");
	
while($row = mysql_fetch_array($name))
{
  echo $row['fname']."&nbsp;" . $row['mname']."&nbsp;" . $row['lname']; 
}
}
else
{
	echo "Not logged In";
}
?> </li> 
<li class="lih">|</li>
<li class="lih"><a href="Request_information.php" class="h1">Request Information</a></li> 
<li class="lih">|</li>
<li class="lih"><a href="alumini.php" class="h1">Alumni</a></li>
<li class="lih">|</li>
<li class="lih"><a href="search_students.php" class="h1">Current Students</a></li>
<li class="lih">|</li>
<li class="lih"><a href="gallery.php" class="h1">Gallery</a></li>
<li class="lih">|</li>
<li class="lih"><a href="industry.php" class="h1">Industry</a></li>
<li class="lih">|</li>
<li class="lih"><a href="enquiry.php" class="h1">Enquiry</a></li>
<li class="lih">|</li>
<li class="lih"><a href="about_us.php" class="h1">About</a></li>
<li class="lih">|</li>
<li class="lih"><a href="contact.php" class="h1">Contact</a></li>
</ul>
</div>

<div class="header2">

<table style="margin-left:3%">
<tr>
<td width="9%" rowspan="2"><a href="home.php"><img src="images/logo.png" height="90" width="90" ></a></td>
<td width="1%" rowspan="2"><hr style="width:.17em; height: 5em; background:#C00;"> </td>
<td width="27%" height="55" ><font size="+2"><center><b>SIRDA Group Of Institutions</b></center></font></td>
<!--NAVIGATION-->
<td width="44.5%" rowspan="2">
<div id='cssmenu'>
<ul>
   <li><a href='#'><span>APPLY  ONLINE</span></a>
   <ul>
   <li><a href='registration.php'><span>For  Admission</span></a></li><li></li>
   <li><a href='job.php'><span>For  Job</span></a></li>
   </ul>
   </li>
   <li><a href='#'><span>FACILITY</span></a>
      <ul>
         <li><a href='hostel.php'><span>HOSTEL</span></a></li>
         <li><a href="transport.php"><span>TRANSPORT</span></a></li>
         <li><a href='wi-fi.php'><span>WI-FI</span></a></li>
         <li><a href='gymnasium.php'><span>GYMNASIUM</span></a></li>
         <li><a href='workshop.php'><span>WORKSHOP</span></a></li>
		 <li class='last'><a href='sclass.php'><span>SMART CLASSES</span></a></li>
         <li class='has-sub'><a href='#'><span>LABORATORY</span></a>
          <ul>
               <li><a href='cse_lab.php'><span>CSE LAB</span></a></li>
               <li class='last'><a href='ece_lab.php'><span>ECE LAB</span></a></li>
			   <li class='last'><a href='ce_lab.php'><span>CE LAB</span></a></li>
			   <li class='last'><a href='workshop.php'><span>WORKSHOP</span></a></li>
            </ul></li>
      </ul></li>
   <li><a href='#'><span>ADMISSION</span></a>
   <ul>
         <li><a href='b-tech_adm.php'><span>B.Tech</span></a></li>
         <li><a href='poly_adm.php'><span>Polytechnic</span></a></li>
         <li><a href='pharmacy_adm.php'><span>Pharmacy</span></a></li>
         <li><a href='mtech_adm.php'><span>M.Tech</span></a></li>
      </ul>
	  </li>
     <li><a href='#'><span>FACULTY</span></a>
     <ul>
         <li><a href='ce_dep.php'><span>CE Department</span></a></li>
         <li><a href="cse_dep.php"><span>CSE Department</span></a></li>
         <li><a href='ece_dep.php'><span>ECE Department</span></a></li>
         <li><a href='eee_dep.php'><span>EEE Department</span></a></li>
         <li><a href='me_dep.php'><span>ME Department</span></a></li>
		 <li class='last'><a href='pharm_dep.php'><span>Pharmacy Department</span></a></li>
         </ul>
         </li>
      <li><a href='post.php'><span>POST</span></a></li>
   <li class='last'>
   
   <?php

if(isset($_SESSION['user']))
{
	echo "<a href='logout.php'><span>LOG OUT</span></a>";
}
else
{
	echo " <li><a href='#'><span>LOG IN</span></a>
   <ul>
         <li><a href='login.php'><span>User Log In</span></a></li>
         <li><a href='faculty_login.php'><span>Faculty Log In</span></a></li>
      </ul>
	  </li>";
	
}
?>
</li>
</ul>
</div>
 <!--NAVIGATION END-->
 
 
<td width="3%" rowspan="2"><hr style="width:.07em; height: 3em; background:#C00;"> </td>
<td width="30%" rowspan="2"><form method="get" action=" http://www.google.com/search?ie=UTF-8&q={q}">
<input type="text" class="tftextinput" name="q" size="13" maxlength="50"><input type="submit" value="search" class="tfbutton">
	</form>
    </td>
    <tr>
    <td valign="top"><center>THE RISING SUN</center></font></td>
    </tr>
  <td height="2"></tr>
  </table>
 
</div>

<div class="content">

</div>

<br><br><br><br><br>
<br><br><br>


</body>
</html>