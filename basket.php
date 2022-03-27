<?php
session_start();

include ("db.php"); //include db file

$pagename="Smart Basket"; //Create and populate a variable called $pagename

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet

echo "<title>".$pagename."</title>"; //display name of the page as window title

echo "<body>";

include ("headfile.html"); //include header layout file

include("detectlogin.php"); //include detect login php file

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

if (isset($_POST['h_prodID']))
{
    $delprodid = $_POST['h_prodID'];
    unset($_SESSION['basket'][$delprodid]);
    echo "<p>1 item removed from the basket</p>";
}

//if the posted ID of the new product is set i.e. if the user is adding a new product into the basket
if(isset($_POST['h_prodid'])) {
//capture the ID of selected product using the POST method and the $_POST superglobal variable
//and store it in a new local variable called $newprodid
    $newprodid = $_POST["h_prodid"];

//capture the required quantity of selected product using the POST method and $_POST superglobal variable
//and store it in a new local variable called $reququantity
    $reququantity = $_POST["p_quantity"];

////Display id of selected product
//echo "<p>ID of selected product : ".$newprodid;
//
////Display quantity of selected product
echo"<p>Quantity of selected product : ".$reququantity;

//create a new cell in the basket session array. Index this cell with the new product id.
//Inside the cell store the required product quantity
    $_SESSION['basket'][$newprodid]=$reququantity;
    // echo "<p><b>1 item added</b>";
} else {
    //else display "Basket unchanged " message - session array is unchanged
    echo "<p><b>Basket unchanged</b></p>";
    echo "<br>";
}

$total=0;
//if the session array $_SESSION['basket'] is set
if(isset($_SESSION['basket'])){
    // echo "<form action='basket.php' method='post'>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Product</th>";
    echo "<th>Price</th>";
    echo "<th>Quantity</th>";
    echo "<th>Subtotal</th>";
    echo "<th>Remove Product</th>";
    echo "</tr>";

    foreach($_SESSION['basket'] as $prodID => $prodQuantity){
        $SQL = "select prodName, prodPrice from Product where prodId = $prodID";
        $exeSQL = mysqli_query($conn, $SQL) or die(mysqli_error($conn));
        while($arrayp=mysqli_fetch_array($exeSQL)){
            $prodTotal = $arrayp['prodPrice'] * $prodQuantity;
            $total = $total + $prodTotal;
            echo "  <tr>";
            echo "	<td>".$arrayp['prodName']."</td>";
            echo "	<td> $".$arrayp['prodPrice']."</td>";
            echo "	<td>".$prodQuantity."</td>";
            echo "	<td> $".$prodTotal."</td>";
            echo " <td> <button type='submit'>Remove</button></td>";
            echo " <input type='hidden' name='h_prodID' value='.$prodID.'>";
            echo "  </tr>";
        }
    }
    echo "<tr>
            <td colspan='4'>Total</td>
            <td> $".$total."</td>
            </tr>";
    echo "</table>";
    echo "<br><a href='clearbasket.php'>CLEAR BASKET</a>";
}else {
    echo "<table>";
    echo "  <tr>";
    echo "	<th>Product</th>";
    echo "	<th>Price</th>";
    echo "	<th>Quantity</th>";
    echo "	<th>Subtotal</th>";
    echo "  </tr>";


    echo "<tr>
    <td colspan='3'><b>Total</b></td>
    <td><b> $".$total."</b></td>
    </tr>";
    echo "</table>";
}
$_SESSION['total']=$total;

if(isset($_SESSION['userId'])){
    echo "<br><br>To finalize order: <a href='checkout.php'>Checkout</a>";
} else {
    echo "<br><br><p>New homteq users: <a href='signup.php'>Sign-up</a></p>";
    echo "<br><p>Returning homteq users: <a href='login.php'>Login</a></p>";
}

include("footfile.html"); //include head layout

echo "</body>";
?>
