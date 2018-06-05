<?php 
  //This file will hold all of the code for the movies page

  //Pulling in the databases
  // require('../model/database.php');
  // require('../model/games.php');
  // require('../model/game_db.php');

  //Creating the object to deal with the database. 
  //$GameDB = new gameDB();

  //Setting a default action 
  $action = filter_input(INPUT_POST, 'action');
  if ($action == NULL) {
      $action = filter_input(INPUT_GET, 'action');
      if ($action == NULL) {
          $action = 'games';
      }
  }

  //Switch statment to determine which page to go to. 
  switch ($action) {

    //This action will bring the user to the games home page
    case 'games':
      include('games.php');
      break;
  }


?>