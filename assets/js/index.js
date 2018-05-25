//The code in here will deal with the javascript in this project. 

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