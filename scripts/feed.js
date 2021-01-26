var searchfor;
function searching() {
    // we need to get the input from the text bar for search to send it to the search page
    searchfor = document.getElementById("searchinput").value;
    sessionStorage.setItem("search", searchfor);
}

//require ('connect_db.php');
/*
function Post() {
        
    this.id = -1;
    this.img = -1;

        //var ratecount = 0;
        //var totalrates = 0;
        // var rates = get the list of rates from the DB
        // for (rate: rates) {
        //  totalrates = totalrates + rate
        //  ratecount++;
        //var averagerates = totalrates/ratecount;
    this.averagerate = 0;

    this.description = -1;
    this.comments = [];
    this.user = -1;
    this.tags = [];
    this.geotag = -1;

    const post = document.createElement("P");
    var feedbox = document.getElementById("feedbox");
    feedbox.innerHTML("feedbox");
        
    alert("alert");

    const rate = document.createElement("P");
    rate.id = "rate";
    rate.innerText = "Average rate: "+ this.averagerate;
    post.appendChild(rate);

    const username = document.createElement("BUTTON");
    username.id = "username";
    username.innerText = this.user;
    post.appendChild(username);

    const description = document.createElement("P");
    description.id = "description";
    description.innerText = this.description;
    post.appendChild(description);

    alert("new post");


}
var newpost = new Post();
var newpost2 = new Post();
*/
