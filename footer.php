<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>footer</title>
<link rel="stylesheet" href="scss.css" type="text/css">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<script>
$( document ).ready(function() {
$('.menu-item').hover(function () {
    $('#active', this).toggleClass('active');
    $('#active', this).css({'display':'block'}); //adds context
});
});
</script>
<style>

/* Component *******************************/
/* Container */


#container #menu-wrap {
	width:250px;
	height:5px;
	background:#EBEBEB;
/*	border-bottom:#09F thin solid;
	border-bottom-width:3px;*/
	padding:0px 0px 0px 0px;
	margin:20px auto 50px auto;
	text-align:center;
	line-height:13px;
}

#container #menu-wrap .menu-item {
    width: 38px;
    height: 55px;
    display: inline-block;
    position: relative;
    overflow: hidden;
    border-radius: 3px;
}

#container #menu-wrap .menu-item i {
    width:100%;
	padding:7px 0px 5px 0px;
	border-radius:3px;
}

#container #menu-wrap .menu-item i.fa-facebook {
	background:#3B5998;
	color:#FFF;
}
#container #menu-wrap .menu-item i.fa-twitter {
	background:#44CCF6;
	color:#FFF;
}
#container #menu-wrap .menu-item i.fa-youtube {
	background:#CE332D;
	color:#FFF;
}
#container #menu-wrap .menu-item i.fa-linkedin {
	background:#0275B6;
	color:#FFF;
}
#container #menu-wrap .menu-item i.fa-google-plus {
	background:#D13F2D;
	color:#FFF;
}

	
#container #menu-wrap .menu-item span {
	width:32px;
	height:32px;
    position: absolute;
    top: 0px;
    left: 0px;
    text-align: center;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    display: block;
	color:#445878;
	background:#F5F5F5;
	border-bottom:#CCC thin solid;
	border-bottom-width:3px;
}

#container #menu-wrap .menu-item span:hover {
    top: -29px;
	font-size:20px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

span.active {
	top:-20px !important;
	font-size:0px !important;
}

#container #menu-wrap .menu-item a {
	font-size:12px;
	color:#445878;
	text-decoration:none;
}

#container #menu-wrap .menu-item .text {
	text-decoration: none;
    font-size: 0px;
    padding:20px 0px 17px 0px;
    text-align: center;
	font-family:Arial, Helvetica, sans-serif;
	font-weight:normal;
    width: 100%;
    position: absolute;
    bottom: -54px;
    display: block;
	border-top:#FFF thin solid;
	border-top-width:3px;
     background-color: #FFF;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

#container #menu-wrap .menu-item:hover > .text {
    bottom: 0;
	font-size:25px;
	padding:0px 0px 0px 0px;
    -webkit-transition: all 0.5s ease-in-out;
   -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
	text-align:center;
}

#container #menu-wrap .menu-item .icon {
    width: 32px;
    height: 32px;
	padding:15px 9px 5px 4px;
	font-size:25px;
	text-align:center;
}
</style>
</head>

<body>
<div id="footer">
<table class="tab1" >
<tr style="color:#006"><th width="20%" >EXPLORE<hr></th> <th width="20%" >QUICK LINKS<hr></th> <th width="20%">CONTACT<hr></th> <th width="20%">BROUCHER<hr></th></tr>
<tr><td><a href="http://www.aicte-india.org/" class="tf1">AICTE</a><hr></td> <td><a href="anti_ragging.php" class="tf1">Anti Ragging</a><hr></td>    <td>SIRDA GROUP OF INSTITUTIONS<hr></td> <td rowspan="7"><a href="broucher_pdf.pdf"><img src="images/broucher.jpg"></a></td> </tr> 
<tr><td ><a href="http://www.iitmandi.ac.in/" class="tf1">IIT MANDI</a><hr></td>   <td ><a href="vacent_seats.php" class="tf1">Jobs At Sirda</a><hr></td>   <td>Vill-Naulakha, Sundernagar,<hr></td> </tr> 
<tr><td ><a href="http://www.nith.ac.in/" class="tf1">NIT HAMIRPUR</a><hr></td>  <td ><a href="login.php" class="tf1">Post Update</a><hr></td>   <td>Distt-Mandi, Himachal Pradesh<hr></td></tr>
<tr><td ><a href="http://www.hptechboard.com/" class="tf1">Technical Board</a><hr></td>    <td ><a href="login.php" class="tf1">Post Artical</a><hr></td>           <td>India-175021<hr></td></tr>
<tr><td ><a href="http://hpuniv.nic.in/" class="tf1">H.P. University</a><hr></td>   <td rowspan="2" ><section id="container">
<!-- Style 2 -->
<div id="menu-wrap">

		<div class="menu-item">
			<span id="active" class="icon fa fa-facebook"></span>
			<a id="hover" class="text" href="https://www.facebook.com/SirdaGroupOfInstitution"><i class="fa fa-facebook"></i></a>
		</div><!-- Menu Item -->
        
		<div class="menu-item">
			<span id="active" class="icon fa fa-twitter"></span>
			<a id="hover" class="text" href="https://twitter.com/SIRDAGROUP"><i class="fa fa-twitter"></i></a>
		</div><!-- Menu Item -->
        
		<div class="menu-item">
			<span id="active" class="icon fa fa-youtube"></span>
			<a id="hover" class="text" href="https://www.youtube.com/watch?feature=player_embedded&v=6HRUEXnHrZ8"><i class="fa fa-youtube"></i></a>
		</div><!-- Menu Item -->
        
		<div class="menu-item">
			<span id="active" class="icon fa fa-linkedin"></span>
			<a id="hover" class="text" href="#"><i class="fa fa-linkedin"></i></a>
		</div><!-- Menu Item -->
        
		<div class="menu-item">
			<span id="active" class="icon fa fa-google-plus"></span>
			<a id="hover" class="text" href="#"><i class="fa fa-google-plus"></i></a>
		</div><!-- Menu Item -->
        		

</div><!-- Menu Wrap -->
</section><!-- Container -->
</td>  <td>Tel: +01907262612<hr></td></tr></tr>     
<tr><td ><a href="http://www.himtu.ac.in/" class="tf1">H.P.T.U.</a></td>     <td >Email: <a href="mailto:kkchaudhary11@gmail.com" target="_top" class="tf1">sirda.edu@gmail.com</a></td>   
</table>
</div>


<div id="footer2">
<ul class="ulf">
<li class="lif"><a href="home.php" class="h1">Home</a></li> 
<li class="lif">|</li>
<li class="lif"><a href="Request_information.php" class="h1">Request Information</a></li> 
<li class="lif">|</li>
<li class="lif"><a href="job.php" class="h1">Apply For Job</a></li>
<li class="lif">|</li>
<li class="lif"><a href="#" class="h1">Admisssion</a></li>
<li class="lif">|</li>
<li class="lif"><a href="post.php"class="h1">Post</a></li>
<li class="lif">|</li>
<li class="lif"><a href="#" class="h1">Faculty</a></li>
<li class="lif">|</li>
<li class="lif"><a href="#" class="h1">Facility</a></li>
<li class="lif">|</li>
<li class="lif"><a href="alumini.php" class="h1">Alumni</a></li>
<li class="lif">|</li>
<li class="lif"><a href="industry.php" class="h1">Industry</a></li>
<li class="lif">|</li>
<li class="lif"><a href="current.php" class="h1">Current Students</a></li>
<li class="lif">|</li>
<li class="lif"><a href="gallery.php" class="h1">Gallery</a></li>
<li class="lif">|</li>
<li class="lif"><a href="enquiry.php" class="h1">Enquiry</a></li>
<li class="lif">|</li>
<li class="lif"><a href="about_us.php" class="h1">About Us</a></li>
<li class="lif">|</li>
<li class="lif"><a href="contact.php" class="h1">Contact Us</a></li>
<li class="lif">|</li>
<li class="lif"><a href="sitemap.php" class="h1">Site Map</a></li>
</ul>
<center><li style="font-size:11px">Copyright© 2014 - All Rights Reserved - sirda.in</li></center>
</div>
<center>
<img src="images/under-construction-1.png" width="400" height="100" >
</body>
</html>