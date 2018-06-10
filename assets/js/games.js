//This file will hold the code for all of the javascript code needed in the games controller. 

//This function will deal with getting the game by title
function getGameTitle() {
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

  xmlhttp.open("GET", "getGameTitle.php?q="+title, true);
  xmlhttp.send();
}