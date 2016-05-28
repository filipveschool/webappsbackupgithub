<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 5/24/2016
 * Time: 10:10 AM
 */

//include "../dbconnect.php";
$db = mysqli_connect('localhost','root','','webappsexamen');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    debug_to_console($_SERVER);
    //username
    //password
    //is_admin == 1 ==> is admin
    // is admin ==> 0 is user

    $myusername = $_POST['user_name'];
    debug_to_console($myusername);
    $mypassword = $_POST['password'];
    debug_to_console($mypassword);

    $submitted = $_POST['submitted'];
    debug_to_console($submitted);


    $sql = "SELECT user_id, is_admin from users
where user_name = '$myusername' and password = '$mypassword'";

    // execute the query
    $result = mysqli_query($db, $sql);

    debug_to_console($result);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    $result->close();
    $db->close();

    if ($count == 1) {
        if ($row['is_admin'] == 1) {
            $_SESSION['login_user'] = $myusername;
            $_SESSION['admin'] = true;
            header("location: labo3ChatAppAdmin.php");
        } else {
            $_SESSION['login_user'] = $myusername;
            $_SESSION['admin'] = false;
            header("location: labo3ChatAppUser.php");
        }

    } else {
        $error = "Your login name or password is invalid";
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
