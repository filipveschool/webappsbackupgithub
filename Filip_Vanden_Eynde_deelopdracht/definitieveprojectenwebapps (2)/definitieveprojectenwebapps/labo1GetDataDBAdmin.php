<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 5/24/2016
 * Time: 9:17 AM
 */

//header('Content-Type: text/json');
//include "config.php";
include "dbconnect.php";
//$db = mysqli_connect('localhost','root','','webappsexamen');

$sql2 = "SELECT productname, price, stockstatus from products";
//$sql = "SELECT * from products";

$result2 = mysqli_query($db, $sql2);

//$js = json_encode($result2);

//echo $js;

$emparray = array();
while ($rowjson = mysqli_fetch_assoc($result2)) {
    $emparray[] = $rowjson;

}

$jsondata = json_encode($emparray);

echo $jsondata;
//return $jsondata;
//printf($jsondata);