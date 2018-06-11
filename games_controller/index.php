<?php 
  //This file will hold all of the code for the movies page

  //Pulling in the databases
  require('../model/database.php');
  require('../model/games.php');
  require('../model/games_db.php');

  //Creating the object to deal with the database. 
  $GameDB = new gameDB();

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
    //This action brings the user to the page to add a gam
    case 'add_game':
      include('add_game.php');
      break;
    //The post route to add a new game 
    case 'add_game_post':
    
      //Creating a game object 
      $game = new Game();

      //Getting the user input
      $title = filter_input(INPUT_POST, 'title');
      $rating = filter_input(INPUT_POST, 'rating');
      $genre = filter_input(INPUT_POST, 'genre');
      $year = filter_input(INPUT_POST, 'year');

      // //Lowercasing all of the words in the input that is a string.
      $title = strtolower($title);
      $genre = strtolower($genre);

      // //Setting the properties of the book object 
      $game->setTitle($title);
      $game->setRating($rating);
      $game->setGenre($genre);
      $game->setYear($year);

      //Calling the addGame method to add a game 
      $GameDB->addGame($game);

      header('Location: .?action=games');
      break;
    //This action brings the user to the page to search for a game
    case 'search_games':
      include('search_games.php');
      break;
    //This action will take the user to the page to search for a game by title
    case 'search_by_title':
      include('search_title.php');
      break;
    //This action will take the user to the page to search for a game by genre
    case 'search_by_genre':
      include('search_genre.php');
      break;
  }


?>