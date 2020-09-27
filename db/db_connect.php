<?php
define('DB_USER', "sql7367620"); // db user
define('DB_PASSWORD', "EJqJiqleUU"); // db password (mention your db password here)
define('DB_DATABASE', "sql7367620"); // database name
define('DB_SERVER', "sql7.freemysqlhosting.net"); // db server
 
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
 
// Check connection
if(mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
?>