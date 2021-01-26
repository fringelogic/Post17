<?php
//create link to database
$link = mysqli_connect('localhost','jat4', '6;P2Eg4IAZE','jat4');

//verify connection
if (!$link) {
    die('Could not connect to MySQL: ' . mysqli_error());
}

?>
