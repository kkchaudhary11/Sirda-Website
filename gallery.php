<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>gallery</title>
  
</head>
<body>
<?php
include ("header.php");
?>



<script src="sliderengine2/jquery.js"></script>
    <script src="sliderengine2/amazingslider.js"></script>
    <script src="sliderengine2/initslider-1.js"></script>
<div style="margin:30px auto;max-width:900px;">
    
    <!-- Insert to your webpage where you want to display the slider -->
    <div id="amazingslider-1" style="display:block;position:relative;margin:16px auto 86px;">
        <ul class="amazingslider-slides" style="display:none;">
        <?php
		mysql_connect('localhost','root','');
		mysql_select_db('sirda');
		$result = mysql_query("SELECT * FROM gallery");
           while($row = mysql_fetch_array($result))
			{
				 $t=$row['title'];
				 $d=$row['desc'];
				 echo "<li>"."<img src='images/$row[image]' alt='$t' data-description='$d'>"."</li>";
				}
            ?>
            <li><img src="images/VvB2JK7RWdc.jpg" alt="Sirda Institute of Engg. & Emerging Technology" />
                <video preload="none" src="http://www.youtube.com/embed/VvB2JK7RWdc" ></video>
</li>
        </ul>
        <ul class="amazingslider-thumbnails" style="display:none;"> 
        <?php
		$result = mysql_query("SELECT thumb FROM gallery");
        while($row = mysql_fetch_array($result))
			{
				 echo "<li>"."<img src='images/$row[thumb]'>"."</li>";
				}
            ?>
        
            <li><img src="images/VvB2JK7RWdc-tn.jpg" /></li>
        </ul>
        
    </div>
    <!-- End of body section HTML codes -->
    
</div>
<br><br>
<?php
include ("footer.php");
?>
</body>
</html>