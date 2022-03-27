<?php

session_start();

$pagename="LOG IN"; //Create and populate a variable called $pagename

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet

echo "<title>".$pagename."</title>"; //display name of the page as window title

echo "<body>";

include ("headfile.html"); //include header layout file: inserted the file path as the parameter

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

//display random text
echo "<form action='login_process.php' method='POST'>";
echo " <table style='border:0px'>";
echo "	<tr style='border:0px'><td style='border:0px'>Email :</td><td style='border:0px'> <input type='email' name='email'></td></tr>";
echo "	<tr style='border:0px'><td style='border:0px'>Password :</td><td style='border:0px'> <input type='password' name='password'></td></tr>";
echo "	<tr style='border:0px'><td style='border:0px'></td><td style='border:0px'><input type='submit' value='Sign In'></td></tr>";
echo "	</table>";
echo "</form>";

include("footfile.html"); //include footer layout file: inserted the file path as the parameter

echo "</body>";
?>

