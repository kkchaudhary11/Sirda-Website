<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Enquiry Send</title>
</head>

<body>
 <?php 
    $name = $_POST["name"]; 
 $email = $_POST["email"]; 
    $phno = $_POST["phno"];
    $subject = $_POST["sub"];
    $message = $_POST["query"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail($email,$subject,$message,"From: $name\n");
    echo "Thank you";
?>
</body>
</html>