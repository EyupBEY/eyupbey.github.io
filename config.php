<?php
$host="aws-www-ceyda-live.cnox2nsxjmiv.eu-central-1.rds.amazonaws.com"; // Host name 
$username="EyupBEY"; // Mysql username 
$password="abrakadabra4563271615LBCE+"; // Mysql password
$db_name="letter_for_the_special_one"; // Database name
$conn=mysqli_connect($host,$username,$password,$db_name) or die ("Failed to connect with DB");
$base_url ='http://localhost/letter-for-the-special-one/index.html'; //plz change this url
?>