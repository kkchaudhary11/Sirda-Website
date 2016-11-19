
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
   <title> SIRDA NOTICE BOARD</title>
<link rel='shortcut icon' href='assets/img/logo.png'>
    <!--REQUIRED STYLE SHEETS-->
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--ANIMATED FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" />
       <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->



<link rel="stylesheet" type="text/css" href="style.css" />

</head>



<body >
       <!-- NAV SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              <a class="navbar-brand" href="home.php"><img src="assets/img/logo.png" height="40px" width="40px" style="margin-top:-10px;"></a>
                <a class="navbar-brand" href="home.php">SIRDA</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="admin.php">ADMIN LOG-IN</a></li>
                     <li><a href="suggestion.php">SUGGESTION</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
    
    <!--HOME SECTION-->
    

<div id="home-sec">

 
 <div class="container" id="home" >
        <div class="row text-center">
  
<!----------------------fform--------------------------------------------->




 <div class="container1" >
	<section id="content" style="min-width:250px; ">
			<h1>Notice Board</h1>
<div  style="color:black; text-align:left; padding-left:5px; padding-right:5px;">
      <!-------------php code--------------->

       <?php

$form=$_GET['pid'];

  require_once('dcon.php');       
      

 

   mysql_select_db($database_localhost,$localhost);
   


if($form=='NULL')
{          $query="SELECT * FROM nbdata ORDER BY id DESC LIMIT 10";
               
}
else
{
$form=$form-10;
$query="SELECT * FROM nbdata WHERE(id<='$form')ORDER BY id DESC LIMIT 10 ";

}


                   $result=mysql_query($query);                          
                 echo "<br><hr>";
                 while($row = mysql_fetch_assoc($result))
                    {
                     echo "<a href=uploads/".$row['name']."><div ><div style='float:left;width: 65%;overflow:hidden;'><b style='color:red;'>".$row['sub']."</b><br>".$row['descr']."<br>".$row['branch']."</div ><div style='text-align:right; overflow: hidden;'>".$row['category']."<br>".$row['date']."</div></div></a>";
                     echo"<hr>";

                       } 


                      echo"</table>";


if($form=='NULL')
{          $query="SELECT * FROM nbdata ORDER BY id DESC LIMIT 1";
               
}
else
{
$form=$form-10;
$query="SELECT * FROM nbdata WHERE id<='$form'  ORDER BY id DESC LIMIT 1 ";

}

               $result=mysql_query($query);



                 while($row = mysql_fetch_assoc($result))
                    {
                  echo"   <form action='student.php' method='get'>
		
			<input type='hidden' name='pid' value='".$row['id']."'>
				<input type='submit' value='older'/>
				
			
		</form>";}




           ?>


</div>			
				
		<div class="button">
			<a href="#">Download from drop box</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->


<!-----------------------------------------------------end form----------------------------->








            </div>
        
    </div>
         </div>
    
    <!--END HOME SECTION-->
  
   

<?php

include("footer.php");
?>
