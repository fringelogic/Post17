function openLogin() {    
    open("login.html");
    close("createaccount.html");
}
function checkUserDetails() {
    // check to make sure the username or email is not already used
    // also check age if appropriate
    var useremail;
    var userpassword;
    var userrepassword;
    var username;
    var userusername;
    var userbirth;

    useremail = document.getElementById("email").value;
    userpassword = document.getElementById("password").value;
    userrepassword = document.getElementById("repassword").value;
    username = document.getElementById("name").value;
    userusername = document.getElementById("username").value;
    userbirth = document.getElementById("birth").value;
    // check with database for match
    
    return 1;
}