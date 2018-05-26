<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
  
  //Pulling in the databases
  // require('../model/database.php');
  // require('../model/movie.php');
  // require('../model/movie_db.php');

  //Creating the object to deal with the database. 
  //$MovieDB = new movieDB();

  //Searching for the movie in the database by title
  //$movie = $MovieDB->searchByTitle($title);
  // echo $movie->getTitle();
  
  $title = $_GET['q'];

  $con = mysqli_connect('localhost','root','root','inventory');
  if (!$con) {
      die('Could not connect: ' . mysqli_error($con));
  }

  mysqli_select_db($con,"ajax_demo");
  $sql="SELECT * FROM movies WHERE title = '".$title."'";
  $result = mysqli_query($con,$sql);

  while($row = mysqli_fetch_array($result)) {
    echo "<td>" . $row['genre'] . "</td>";
    echo "<td>" . $row['director'] . "</td>";
  }

  mysqli_close($con);



?>

</body>
</html>