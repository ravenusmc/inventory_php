<!DOCTYPE html>
<html>
<head>
</head>
<link rel="stylesheet" type="text/css" href="../assets/css/movies.css">
<body>

  <?php

    //This file will contain the code for the ajax call to display the movies by year. 

    //Pulling in the databases
    require('../model/database.php');
    require('../model/movie.php');
    require('../model/movie_db.php');

    //Creating the object to deal with the database. 
    $MovieDB = new movieDB();

    //This get the response from what the user typed in. 
    $genre = $_GET['q'];

    //Searching for the movie in the database by title
    $movies = $MovieDB->searchByGenre($genre);



  ?>




</body>
</html>