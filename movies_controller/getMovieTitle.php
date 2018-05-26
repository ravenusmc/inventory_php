<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
  
  //Pulling in the databases
  require('../model/database.php');
  require('../model/movie.php');
  require('../model/movie_db.php');

  //Creating the object to deal with the database. 
  $MovieDB = new movieDB();
  
  $q = $_GET['q'];

  echo $q;
  

?>

</body>
</html>