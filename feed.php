<?php
//include auth_session.php file on all user panel pages
session_start();
include("auth_session.php");
?>
<!-- FEED PAGE testing -->
<!DOCTYPE html>
<html>
<head>
    <title>Post17 by FringeLogic</title>
    <link rel="stylesheet"
          type="text/css"
          href="styles/feedstyle.css" />

    <IMG id="namebanner" ; SRC="images/logo.png"></IMG>



</head>

<body id="body">

    <script type="text/javascript" src="scripts/feed.js"></script>
    <title id="logobackground"></title>


    <div class="nav">
        <ul>
            <li><button id="feed">Feed</button></li>
            <li><button id="channels" onclick="location.href='channels.php'">Channels</button></li>
            <li><button id="challenges" onclick="location.href='challenges.php'">Challenges</button></li>
            <li><button id="myaccount" onclick="location.href='myaccount.php'">My Account</button></li>
			<li><button id="logout" onclick="location.href='logout.php'">Logout</button></li>
        </ul>
    </div>

    <input type="text" id="searchinput"><br>
    <button id="inputbutton" onclick="searching(); location.href='search.php'">Search</button>

    <div id="feedbox">

        <button id="viewaccount">View @username's account</button>
        <div id="geodiv">
            <IMG id="globe" ; SRC="globeLogo.png"></IMG>
            <p id="geotag">Location:</p>
        </div>
        <IMG id="feedimage" ; SRC="images/image.jpg"></IMG>
        <p id="avgrate">Average Rate: X stars </p>
        <div id="stars">
            <button id="onestar">*</button>
            <button id="twostar">**</button>
            <button id="threestar">***</button>
            <button id="fourstar">****</button>
            <button id="fivestar">*****</button>
        </div>

        <p id="description">@username:</p>
        <div id="comment">
            <input type="text" id="newcomment"><br>
            <button id="addcomment">Add comment</button>
        </div>
        <button id="next">Next post</button>

    </div>




</body>
</html>
