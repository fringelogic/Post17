function openRecommended() {    
    open("recommended.html");
    close("myaccount.html");
}
function openFeed() {    
    open("feed.html");
    close("myaccount.html");
}
function openChannels() {    
    open("channels.html");
    close("myaccount.html");
}
function openChallenges() {    
    open("challenges.html");
    close("myaccount.html");
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


function newPost() {
    newtext = "create a new post . . . \nAttach image \nAdd geotag \nAdd hashtags \nAdd to channel \nAdd picture caption ";
    document.getElementById("temptext").innerHTML = newtext;
    document.getElementById("temptext").style.border= "2px solid black";

    // user upload picture
    // user add to a channel
    // user add geotags
    return 1
}

function settings() {
    newtext = "account settings . . . \nChange password \nDelete account \nDo something? \nDo another something?";
    document.getElementById("temptext").innerHTML = newtext;
    document.getElementById("temptext").style.border= "2px solid black";
    return 1
}