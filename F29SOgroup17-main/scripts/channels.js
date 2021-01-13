function openRecommended() {    
    open("recommended.html");
    close("channels.html");
}
function openFeed() {    
    open("feed.html");
    close("channels.html");
}
function openChallenges() {    
    open("challenges.html");
    close("channels.html");
}
function openMyAccount() {    
    open("myaccount.html");
    close("channels.html");
}

function newChannel() {
    // prompt user for channel name
    // channel tags
    // channel public or private
    return 1;
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