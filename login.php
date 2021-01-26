<!-- LOG IN PAGE -->
<?php
  # Access session.
session_start() ;
# Open database connection.
require ( 'connect_db.php' ) ;

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Post17 by FringeLogic</title>
        <link rel = "stylesheet"
            type = "text/css"
            href = "loginstyle.css" />

        <IMG id="namebanner"; SRC="logo.png"></IMG>
    </head>
    <body id="body">

        <script type="text/javascript" src="login.js"></script>

        
        
        <button id="loginbutton">login</button>
        <button id ="createaccountbutton" onclick="openCreateAccount();">create account</button>
        
        <form action = "login_action.php" method="post">
            <label for="email" id="emailtext">Email:</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="password" id="passwordtext">Password:</label><br>
            <input type="text" id="password" name="password"><br>
            <button id="inputbutton" onclick="checkUserDetails();">Login</button>
        </form>
        
        

    </body>
</html>