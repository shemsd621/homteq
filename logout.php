<?php

session_start();

$pagename="Sign In"; //Create and populate a variable called $pagename

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet

echo "<title>".$pagename."</title>"; //display name of the page as window title

echo "<body>";

include ("headfile.html"); //include header layout file: inserted the file path as the parameter

include("detectlogin.php"); //include detect login php file

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

if(isset($_SESSION['userFName'])){
    echo "Thank you, ".$_SESSION['userFName']."  ".$_SESSION['userSName'];
    echo "<br><br>User Logged Out !";

    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

}else{
    echo "You are already logged out!";
}


include("footfile.html"); //include head layout
echo "</body>";
?>
