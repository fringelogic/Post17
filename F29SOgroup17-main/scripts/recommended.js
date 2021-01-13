function openFeed() {    
    open("feed.html");
    close("recommended.html");
}
function openChannels() {    
    open("channels.html");
    close("recommended.html");
}
function openChallenges() {    
    open("challenges.html");
    close("recommended.html");
}
function openMyAccount() {    
    open("myaccount.html");
    close("recommended.html");
}

var searchfor;
var newtext;
function searching() {
    searchfor = document.getElementById("searchinput").value;
    if (searchfor != "") {
        newtext = "Showing results for: "+searchfor+" . . . \n1 result found";
        document.getElementById("searchresult").innerHTML = newtext;
        document.getElementById("image1").style.display = "block";
    }
    else if (searchfor == "") {
        newtext = "You didnt enter any key words to search for . . .  ";
        document.getElementById("searchresult").innerHTML = newtext;
    }
    // check with database for match
    
    return 1;
}