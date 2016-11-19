<?php



$hostname_localhost ="mysql8.000webhost.com";
$database_localhost ="a8852674_nb";
$username_localhost ="a8852674_nb";
$password_localhost ="classmate05";
 




$localhost = mysql_connect($hostname_localhost,$username_localhost,$password_localhost)
or
trigger_error(mysql_error(),E_USER_ERROR);
?>