<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 5/24/2016
 * Time: 10:19 AM
 */

$db = mysqli_connect('localhost', 'root', '', 'webappsallelabos');

if (isset($_POST['submit'])) {
    $name = $_POST['namechat'];
    $message = $_POST['message'];
    

    $query = "INSERT INTO chat1 (namechat, message) VALUES ('$name','$message')";
    $run = $db->query($query);
    if ($run) {
        //echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true' />";
        if ($submitted == 1) {
            header("location: labo3ChatAppAdmin.php");
        } else {
            header("location: labo3ChatAppUser.php");
        }
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