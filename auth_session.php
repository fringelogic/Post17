<?php
session_start();
 if (isset($_SESSION['username'])) {
        /// your code here
    } else {
    $message = "Please login";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
