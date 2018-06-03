//The code in here will deal with the javascript in this project. 

//This function will deal with getting the movies by title
function getMovieTitle() {
  let title = document.getElementById('title').value;
  // alert(title);
  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } 
  
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
          document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };

  xmlhttp.open("GET", "getMovieTitle.php?q="+title, true);
  xmlhttp.send();
}

//This function will get the movies by director 
function getMovieByDirector() {

  //Getting the user input
  let director = document.getElementById('director').value;

  //Setting up the XML request
  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } 

  xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };

  xmlhttp.open("GET", "getMovieDirector.php?q="+director, true);
  xmlhttp.send();

};

//This function will get movies based on genre 
function getMovieByGenre() {

  //Getting the user input
  let genre = document.getElementById('genre').value;

  console.log(genre);
}

//This function will get the movie by year 
function getMovieByYear() {

  //Getting the user input
  let year = document.getElementById('year').value;

  //Setting up the XML request
  if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
  } 

  xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };

  xmlhttp.open("GET", "getMovieYear.php?q="+year, true);
  xmlhttp.send();
}