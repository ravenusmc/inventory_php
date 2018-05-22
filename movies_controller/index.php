<?php
  //This file will hold all of the code for the movies page

  //Pulling in the databases
  require('../model/database.php');
  // require('../model/movie.php');
  // require('../model/movie_db.php');

  //Creating the object to deal with the database. 
  //$MovieDB = new movieDB();

  //Setting a default action 
  $action = filter_input(INPUT_POST, 'action');
  if ($action == NULL) {
      $action = filter_input(INPUT_GET, 'action');
      if ($action == NULL) {
          $action = 'movies';
      }
  }

  //Switch statment to determine which page to go to. 
  switch ($action) {

    //This action will bring the user to the movies home page
    case 'movies':
      include('movies.php');
      break;
    //This action will allow the user to add a movie to the database 
    case 'add_movie':
      include('add_movie.php');
      break;
  }


?>