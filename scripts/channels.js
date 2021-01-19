

function newChannel() {
    // prompt user for channel name
    // channel tags
    // channel public or private
    return 1;
}

var searchfor;
function searching() {
    // we need to get the input from the text bar for search to send it to the search page
    searchfor = document.getElementById("searchinput").value;
    sessionStorage.setItem("search", searchfor);
}