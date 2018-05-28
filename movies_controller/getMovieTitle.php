<!DOCTYPE html>
<html>
<head>
</head>
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
  echo "<p>" . $movie->getTitle() . "</p>";
  echo "<p>" . $movie->getDirector() . "</p>";
  echo "<p>" . $movie->getGenre() . "</p>";
  echo "<p>" . $movie->getYear() . "</p>";
  
  
  //This way works

  // $title = $_GET['q'];

  // $con = mysqli_connect('localhost','root','root','inventory');
  // if (!$con) {
  //     die('Could not connect: ' . mysqli_error($con));
  // }

  // mysqli_select_db($con,"ajax_demo");
  // $sql="SELECT * FROM movies WHERE title = '".$title."'";
  // $result = mysqli_query($con,$sql);

  // while($row = mysqli_fetch_array($result)) {
  //   echo "<p>" . $row['title'] . "</p>";
  //   echo "<p>" . $row['director'] . "</p>";
  //   echo "<p>" . $row['genre'] . "</p>";
  //   echo "<p>" . $row['year'] . "</p>";
  // }

  // mysqli_close($con);

?>

</body>
</html>