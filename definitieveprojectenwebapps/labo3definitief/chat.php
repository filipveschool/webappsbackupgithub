<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 5/24/2016
 * Time: 11:07 AM
 */

$db = mysqli_connect('localhost','root','','webappsallelabos');

$query = "SELECT * FROM chat1 ORDER BY id DESC";
$run = $db->query($query);

//$array = $run ->fetch_array();
//echo json_encode($array);

$emparray = array();
while ($rowjson = mysqli_fetch_assoc($run)) {
    $emparray[] = $rowjson;

}

echo json_encode($emparray);

/*
while ($row = $run->fetch_array()):
    ?>

    <div id="chat_data">
        <span style="color:green;"><?= $row['namechat']; ?>:</span>
        <span style="color:brown;"><?= $row['message']; ?></span>
        <span style="float: right;"><?= formatDate($row['date']); ?></span>
    </div> <!-- einde id="chat_data" -->
<?php endwhile; ?>
*/