//This file will hold the code for all of the javascript code needed in the games controller. 

//This function will deal with getting the game by title
function getGameTitle() {
  let title = document.getElementById('title').value;

  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } 
  
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
      }
  };

  xmlhttp.open("GET", "getGameTitle.php?q="+title, true);
  xmlhttp.send();
}

//This function will deal with getting a game by genre 
function getGameGenre() {

  let genre = document.getElementById('genre').value;

  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } 

  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
      }
  };

  xmlhttp.open("GET", "getGameGenre.php?q="+genre, true);
  xmlhttp.send();
}

//This function will deal with getting a game(s) by the year
function getGameByYear() {

  let year = document.getElementById('year').value;

  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } 

  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
      }
  };

  xmlhttp.open("GET", "getGameYear.php?q="+year, true);
  xmlhttp.send();

}

//This function will deal with getting a game(s) rating 
function getGameRating() {

  let rating = document.getElementById('rating').value;
  let choice = document.getElementById('above_or_below').value;

  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } 

  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
      }
  };
  //xhttp.open("GET", "url?parameter_name="+value + "&parameter_name="+value, true);
  xmlhttp.open("GET", "getGameRating.php?q="+rating + "&l="+choice, true);

  // xmlhttp.open("GET", "getGameRating.php?q="+rating + " " + choice, true);
  xmlhttp.send();


}