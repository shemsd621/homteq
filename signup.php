<?php
$pagename="Sign Up"; //Create and populate a variable called $pagename

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet

echo "<title>".$pagename."</title>"; //display name of the page as window title

echo "<body>";

include ("headfile.html"); //include header layout file: inserted the file path as the parameter

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

echo "<form action='signup_process.php' method='POST'>";
echo "	<table style='border:0px'>";
echo "	<tr style='border:0px'><td style='border:0px'>First Name :</td><td style='border:0px'> <input type='text' name='userFName' size='5' maxlength='100'></td></tr>";
echo "	<tr style='border:0px'><td style='border:0px'>Surname :</td><td style='border:0px'> <input type='text' name='userSName' size='5' maxlength='100'></td></tr>";
echo "	<tr style='border:0px'><td style='border:0px'>Address :</td><td style='border:0px'> <input type='text' name='userAddress' size='5' maxlength='200'></td></tr>";
echo "	<tr style='border:0px'><td style='border:0px'>Postal Code :</td><td style='border:0px'> <input type='text' name='userPostCode' size='5' maxlength='20'></td></tr>";
echo "	<tr style='border:0px'><td style='border:0px'>Telephone number :</td><td style='border:0px'> <input type='text' name='userTelNo' size='5' maxlength='20'></td></tr>";
echo "	<tr style='border:0px'><td style='border:0px'>Email :</td><td style='border:0px'> <input type='email' name='userEmail' size='5' maxlength='100'></td></tr>";
echo "	<tr style='border:0px'><td style='border:0px'>Password :</td><td style='border:0px'> <input type='password' name='userPassword' size='5' maxlength='100'></td></tr>";
echo "	<tr style='border:0px'><td style='border:0px'>Confirm Password :</td><td style='border:0px'> <input type='password' name='confirmPassword' size='5' maxlength='100'></td></tr>";
echo "	<tr style='border:0px'><td style='border:0px'></td><td style='border:0px'><input type='submit' name='submitbtn' value='SIGN UP' id='submitbtn'></td></tr>";
echo "	<tr style='border:0px'><td style='border:0px'></td><td style='border:0px'><input type='reset' name='resetbtn' value='CLEAR FORM' id='submitbtn'></td></tr>";
echo "	</table>";
echo "</form>";

include("footfile.html"); //include footer layout file: inserted the file path as the parameter

echo "</body>";
?>

