<?php
define('DB_SERVER','grp6m5lz95d9exiz.cbetxkdyhwsb.us-east-1.rds.amazonaws.com');
define('DB_USER','yy7ba6oxj8qw88st');
define('DB_PASS' ,'xojgkshgmzfuxtax');
define('DB_NAME', 'im1zjxkplab5dk1r');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
