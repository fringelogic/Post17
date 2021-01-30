<?php
session_start();
 if (isset($_SESSION['id'])) {
       header("Location: feed.php");
       exit();
    } else {
    $message = "Please login";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
