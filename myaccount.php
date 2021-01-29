<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!-- MY ACCOUNT PAGE -->
<!DOCTYPE html>
<html>
<head>
    <title>Post17 by FringeLogic</title>
    <link rel="stylesheet"
          type="text/css"
          href="styles/myaccountstyle.css" />

    <IMG id="namebanner" ; SRC="images/logo.png"></IMG>


</head>
<body id="body">

    <script type="text/javascript" src="scripts/myaccount.js"></script>

    <ul>
        <li><button id="feed" onclick="location.href='feed.php'">Feed</button></li>
        <li><button id="channels" onclick="location.href='channels.php'">Channels</button></li>
        <li><button id="challenges" onclick="location.href='challenges.php'">Challenges</button></li>
        <li><button id="myaccount">My Account</button></li>
		<li><button id="logout" onclick="location.href='logout.php'">Logout</button></li>
    </ul>

    <input type="text" id="searchinput"><br>
    <button id="inputbutton" onclick="searching(); location.href='search.php'">Search</button>



    <p id="myusername">*username*</p>
    <p id="myaveragerate">average rating: </p>
    <button id="createpost" onclick="location.href='newpost.php'">New Post</button>
    <button id="settings" onclick="location.href='accountsettings.php'">Account Settings</button>

</body>
</html>
