<!DOCTYPE html>
<html>
<head>
</head>
<link rel="stylesheet" type="text/css" href="../assets/css/movies.css">
<body>

<?php 

  //This file will contain the code for the ajax call. 
  
  //Pulling in the databases
  require('../model/database.php');
  require('../model/games.php');
  require('../model/games_db.php');

  // //Creating the object to deal with the database. 
  $GameDB = new gameDB();

  //This get the response from what the user typed in. 
  $year = $_GET['q'];

  //Searching for the movie in the database by title
  $games = $GameDB->searchByYear($year);

  //Testing to see if the object comes back with any information. 
  if (empty($games)) {
      //This is displayed if nothing is found with the title that's entered. 
      echo 'No Results Found!';
  }else {
      //Displaying the results from the resturn of the movie object
      echo "<div class='director_info_div'>";
  foreach ($games as $game) {
    echo "<div class='director_info_area'>";
    echo "<p>" . "Title: " . $game->getTitle() . "</p>";
    echo "<p>" . "Director: " . $game->getRating() . "</p>";
    echo "<p>" . "Genre: " . $game->getGenre() . "</p>";
    echo "<p>" . "Year: " . $game->getYear() . "</p>";
    echo "</div>";
    }
    echo "</div>";
  }

  


?>




</body>
</html>