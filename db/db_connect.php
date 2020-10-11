<?php
define('DB_USER', "sql2370124"); // db user
define('DB_PASSWORD', "kA6%wR6*"); // db password (mention your db password here)
define('DB_DATABASE', "sql2370124"); // database name
define('DB_SERVER', "sql2.freemysqlhosting.net"); // db server
 
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
 
// Check connection
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
?>