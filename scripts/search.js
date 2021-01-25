var searchfor;
function search() {
    searchfor = sessionStorage.getItem("search");
    var mystring = "Showing results for "+searchfor+". . .";
    var element = document.getElementById("searchresulttext");
    element.innerHTML = mystring;
}
function searching() {
    // we need to get the input from the text bar for search to send it to the search page
    searchfor = document.getElementById("searchinput").value;
    sessionStorage.setItem("search", searchfor);
}

