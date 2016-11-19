
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



<link rel="stylesheet" type="text/css" href="form.css" />

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
    

<div id="home-sec" style="color:black;">

 
 
  
<!----------------------fform--------------------------------------------->




 <form action="#">

  <header>
    <h2>Submit your suggestion here</h2>
  </header>
  
  <div>
    <label class="desc" id="title1" for="Field1">Full Name</label>
    <div>
      <input id="Field1" name="name" type="text" class="field text fn" value="" size="8" tabindex="1">
    </div>
  </div>
    
  <div>
    <label class="desc" id="title3" for="Field3">
      Email
    </label>
    <div>
      <input id="Field3" name="mail" type="email" spellcheck="false" value="" maxlength="255" tabindex="3"> 
   </div>
  </div>
    
  <div>
    <label class="desc" id="title4" for="Field4">
      Message
    </label>
  
    <div>
      <textarea id="Field4" name="review" spellcheck="true" rows="10" cols="50" tabindex="4"></textarea>
    </div>
  </div>
    
  
  <div>
		<div>
  		<input id="saveForm" name="saveForm" type="submit" value="Submit">
    </div>
	</div>
  
</form>


<!-----------------------------------------------------end form----------------------------->







</div>
           
         </div>
    
    <!--END HOME SECTION-->
  
   

<?php

include("footer.php");
?>
