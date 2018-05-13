<?php 
  //This file is for the books section

  // //Pulling in the databases
  // require('../model/database.php');

  // $db = Database::getDB();
   
  //Setting a default action 
  $action = filter_input(INPUT_POST, 'action');
  if ($action == NULL) {
      $action = filter_input(INPUT_GET, 'action');
      if ($action == NULL) {
          $action = 'books';
      }
  }

  //Switch statment to determine which page to go to. 
  switch ($action) {

    case 'books':
      include('books.php');
      break;
    case 'add_book':
      include('add_book.php');
      break;
    case 'search_books':
      include('search_books.php');
      break;
  }

?>


