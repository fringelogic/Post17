function openCreateAccount() {    
    open("createaccount.html");
    close("login.html");
}

function checkUserDetails() {
    var useremail;
    var userpassword;
    useremail = document.getElementById("email").value;
    userpassword = document.getElementById("password").value;
    // chack with database for match
    
    return 1;
}