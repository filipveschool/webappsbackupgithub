<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 5/24/2016
 * Time: 9:16 AM
 */

include "dbconnect.php";
//$db = mysqli_connect('localhost','root','','webappsexamen');

$sql2 = "SELECT productname, price from products";
//$sql = "SELECT * from products";

$result2 = mysqli_query($db, $sql2);

$emparray = array();
while ($rowjson = mysqli_fetch_assoc($result2)) {
    $emparray[] = $rowjson;

}

$jsondata2 = json_encode($emparray);

echo $jsondata2;