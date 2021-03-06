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
  require('../model/movie.php');
  require('../model/movie_db.php');

  //Creating the object to deal with the database. 
  $MovieDB = new movieDB();
  
  //This get the response from what the user typed in. 
  $title = $_GET['q'];

  //Searching for the movie in the database by title
  $movie = $MovieDB->searchByTitle($title);

  //Displaying the results from the resturn of the movie object
  echo "<div class='movie_info_box'>";
  echo "<p>" . "Title: " . $movie->getTitle() . "</p>";
  echo "<p>" . "Director: " . $movie->getDirector() . "</p>";
  echo "<p>" . "Genre: " . $movie->getGenre() . "</p>";
  echo "<p>" . "Year: ". $movie->getYear() . "</p>";
  echo "</div>";

?>

</body>
</html>