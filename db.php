<?php
$dbhost = 'phpmyadmin.ecs.westminster.ac.uk'; //server where the host runs : default - localhost
$dbuser = 'w1839055';  //username : default - root
$dbpass = 'HadPmv1rGfWr'; //password as same as the one used to access PHPMyAdmin : default - empty
$dbname = 'w1839055_0'; //database name where the query is performed
//create a DB connection
// can have upto 6 parameters (socket and port could also be included)
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// if connection is successful, returns a MySQL link identifier
//if the DB connection fails, display an error message and exit
if (!$conn)
{
 // returns the error occurred during the last connect call
 die('Could not connect: ' . mysqli_error($conn));
}
//select the database: changes the default database for the connection
mysqli_select_db($conn, $dbname);
?>
