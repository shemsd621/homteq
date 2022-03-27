<?php

session_start();

include("db.php");

mysqli_report(MYSQLI_REPORT_OFF);   //  deactivate the automatic error messaging

$pagename="Sign Up Results"; //Create and populate a variable called $pagename

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet

echo "<title>".$pagename."</title>"; //display name of the page as window title

echo "<body>";

include ("headfile.html"); //include header layout file: inserted the file path as the parameter

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

$fname = $_POST['userFName'];
$sname = $_POST['userSName'];
$address = $_POST['userAddress'];
$postcode = $_POST['userPostCode'];
$telno = $_POST['userTelNo'];
$email = $_POST['userEmail'];
$password = $_POST['userPassword'];
$confirmpwd = $_POST['confirmPassword'];

if(empty($fname) || empty($sname) || empty($address) || empty($postcode) || empty($telno) || empty($email) || empty($password) || empty($confirmpwd)){
    echo "<b>Sign Up failed!</b>";
    echo "<br>Please complete all details to proceed!<br><br>";
    echo "<a href='signup.php'>Go back</a> to Sign Up";
}else{
    if ($password!=$confirmpwd){
        echo "OOPS! Password does not match!<br><br>";
        echo "<a href='signup.php'>Go back</a> to Sign Up";
    }else {
        $expression = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        $isemail = (preg_match($expression, $email));

        if($isemail){
            //create a $SQL variable and populate it with a SQL statement that saves user details
            $SQL = "insert into users (userType,userFName,userSName,userAddress,userPostCode,userTelNo,userEmail,userPassword)values(' ','$fname','$sname','$address','$postcode','$telno','$email','$password');";

            //run SQL query for connected DB or exit and display error message
            mysqli_query($conn, $SQL);

            if (mysqli_errno($conn) == 0) {
                echo "<b>Sign-up successful!</b><br>";
                echo "<p>Go to <a href=login.php>login</a> page</p>";
            } else {
                echo "<b>Sign-up failed!</b>";
                if (mysqli_errno($conn) == 1062) {
                    echo "<p>Email already in use!<br>";
                    echo "You may be already registered. If not try another email address.</p>";
                    echo "Go back to <a href=signup.php>sign up</a>";
                }

                if (mysqli_errno($conn) == 1064) {
                    echo "<p>Invalid characters entered in the form!<br>";
                    echo "Please avoid the following characters: apostrophes like ['] and backslashes like [\].</p>";
                    echo "Go back to <a href=signup.php>sign up</a>";
                }
            }
        } else {
            echo "<b>Sign-up failed!</b>";
            echo "<p>Email not valid.<br>";
            echo "Make sure you enter a correct email address.</p>";
            echo "Go back to <a href=signup.php>sign up</a>";
        }
        }
}

include("footfile.html"); //include footer layout file: inserted the file path as the parameter

echo "</body>";
?>

