<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!-- CHANNELS PAGE -->
<!DOCTYPE html>
<html>
<head>
    <title>Post17 by FringeLogic</title>
    <link rel="stylesheet"
          type="text/css"
          href="styles/channelsstyle.css" />

    <IMG id="namebanner" ; SRC="images/logo.png"></IMG>
</head>
<body id="body">

    <script type="text/javascript" src="scripts/channels.js"></script>

    <ul>
        <li><button id="feed" onclick="location.href='feed.php'">Feed</button></li>
        <li><button id="channels">Channels</button></li>
        <li><button id="challenges" onclick="location.href='challenges.php'">Challenges</button></li>
        <li><button id="myaccount" onclick="location.href='myaccount.php'">My Account</button></li>
		<li><button id="logout" onclick="location.href='logout.php'">Logout</button></li>
    </ul>

    <input type="text" id="searchinput"><br>
    <button id="inputbutton" onclick="searching(); location.href='search.php'">Search</button>


    <button id="newchannel" onclick="location.href='createchannel.php'">Create a Channel</button>

</body>
</html>
