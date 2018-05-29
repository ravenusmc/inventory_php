<?php
  //This file will hold all of the code for the movies page

  //Pulling in the databases
  require('../model/database.php');
  require('../model/movie.php');
  require('../model/movie_db.php');

  //Creating the object to deal with the database. 
  $MovieDB = new movieDB();

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
    //This action will allow the user to add a movie to the movie table
    case 'add_movie':
      include('add_movie.php');
      break;
    //This action will add a movie to the movie table 
    case 'add_movie_post':

      //Creating a movie object 
      $movie = new Movie();

      //Getting the user input
      $title = filter_input(INPUT_POST, 'title');
      $director = filter_input(INPUT_POST, 'director');
      $genre = filter_input(INPUT_POST, 'genre');
      $year = filter_input(INPUT_POST, 'year');

      //Lowercasing all of the words in the input that is a string.
      $title = strtolower($title);
      $director = strtolower($director);
      $genre = strtolower($genre);

      //Setting the properties of the book object 
      $movie->setTitle($title);
      $movie->setDirector($director);
      $movie->setGenre($genre);
      $movie->setYear($year);

      //Calling the addBook method to add the book
      $MovieDB->addMovie($movie);

      header('Location: .?action=movies');
      break;
    //This action will bring the user to the search for movies page
    case 'search_movies':
      include('search_movies.php');
      break;
    //This action will bring the user to the page to search for movies by title 
    case 'search_by_title':
      include('search_title.php');
      break;
    //This action will bring the user to the page to search for movies by director
    case 'search_by_director':
      include('search_director.php');
      break;
  }


?>