<?php
$host     = "localhost"; 
$username = "root"; 
$password = ""; 
$db_name  = "sharkgym"; 


$con = mysqli_connect($host, $username, $password, $db_name);

if (!$con) {
    
    echo "Failed to connect to MySQL: " . mysqli_connect_error($con);
}

?>
