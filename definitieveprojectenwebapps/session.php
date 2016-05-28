<?php
//include('config.php');
//$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$db = mysqli_connect('localhost','root','','webappsallelabos');
session_start();

$user_check = $_SESSION['login_user'];

$sql = "SELECT user_name from users WHERE user_name = '$user_check'";

$ses_result = mysqli_query($db, $sql);

debug_to_console($ses_result);

$row = mysqli_fetch_array($ses_result, MYSQLI_ASSOC);

$login_session = $row['user_name'];

if (!isset($_SESSION['login_user'])) {
    header("location:index.php");
}

function debug_to_console($data)
{
    if (is_array($data) || is_object($data)) {
        echo("<script>console.log('PHP: " . json_encode($data) . "');</script>");
    } else {
        echo("<script>console.log('PHP: " . $data . "');</script>");
    }
}