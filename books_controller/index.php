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

    //This action will bring the user to the books home page
    case 'books':
      include('books.php');
      break;
    //This action will bring the user to the add book page
    case 'add_book':
      include('add_book.php');
      break;
    case 'add_book_post':

      //Getting the user input
      $title = filter_input(INPUT_POST, 'title');
      $author = filter_input(INPUT_POST, 'author');
      $subject = filter_input(INPUT_POST, 'subject');
      $year = filter_input(INPUT_POST, 'year');
      $category = filter_input(INPUT_POST, 'category');

      header('Location: .?action=books');
      break;
    //This action will bring 
    case 'search_books':
      include('search_books.php');
      break;
  }

?>


