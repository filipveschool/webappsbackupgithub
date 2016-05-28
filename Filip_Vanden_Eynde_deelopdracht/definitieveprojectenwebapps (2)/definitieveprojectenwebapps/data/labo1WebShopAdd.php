<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 5/24/2016
 * Time: 9:29 AM
 */

//include "../dbconnect.php";
$db = mysqli_connect('localhost','root','','webappsexamen');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $productname = $_POST['productname'];
    $prijs = $_POST['prijs'];
    $stockstatus = $_POST['stockstatus'];

    if ($productname == '') {
        header("location: ../labo1WebShopAdmin.php");
    } else {

        $sql = "INSERT INTO products(productname,price,stockstatus) 
VALUES ('$productname','$prijs','$stockstatus')";

        $add = mysqli_query($db, $sql);

        //$add->close();
        $db->close();

        header("location: ../labo1WebShopAdmin.php");
    }
}
function debug_to_console($data)
{
    if (is_array($data) || is_object($data)) {
        echo("<script>console.log('PHP: " . json_encode($data) . "');</script>");
    } else {
        echo("<script>console.log('PHP: " . $data . "');</script>");
    }
}
