<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 5/24/2016
 * Time: 10:28 AM
 */

$db = mysqli_connect('localhost','root','','webappsallelabos');

function formatDate($date){
    return date('g:i a', strtotime($date));
}