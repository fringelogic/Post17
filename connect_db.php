<?php
$link = mysqli_connect('localhost','databasename','password','databasename'); // change the details
if (!$link) {
    die('Could not connect: ' . mysqli_error($link));
}

?>