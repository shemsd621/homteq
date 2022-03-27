<?php
session_start();

include("db.php");

//Create and populate a variable called $pagename
$pagename="Clear Smart Basket";

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet

echo "<title>".$pagename."</title>"; //display name of the page as window title

echo "<body>";

include("headfile.html"); //include header layout file

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

unset($_SESSION['basket']);
echo "<p> Your basket has been cleared</p>";
echo "<br>";
echo " <table>";
echo "  <tr>";
echo "	<th>Product</th>";
echo "	<th>Price</th>";
echo "	<th>Quantity</th>";
echo "	<th>Subtotal</th>";
echo "  </tr>";


echo " <tr>";
echo " <td colspan='3'><b>Total</b></td>";
echo " <td> <b>$0.00</b></td>";
echo " </tr>";
echo " </table>";
include("footfile.html"); //include head layout
echo "</body>";
?>