var searchfor;
function search() {
    searchfor = sessionStorage.getItem("search");
    var mystring = "Showing results for "+searchfor+". . .";
    var element = document.getElementById("searchresulttext");
    element.innerHTML = mystring;
}

function searching(){
    return 1;
}

