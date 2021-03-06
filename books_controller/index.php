<?php 
  //This file is for the books section

  //Pulling in the databases
  require('../model/database.php');
  require('../model/book.php');
  require('../model/books_db.php');

  //Creating the object to deal with the database. 
  $BookDB = new BookDB();
   
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
    //This action will allow the user to add a book to the database
    case 'add_book_post':

      //Creating a book object 
      $book = new Book();

      //Getting the user input
      $title = filter_input(INPUT_POST, 'title');
      $author = filter_input(INPUT_POST, 'author');
      $subject = filter_input(INPUT_POST, 'subject');
      $year = filter_input(INPUT_POST, 'year');
      $category = filter_input(INPUT_POST, 'category');

      //Lowercasing all of the words in the input that is a string.
      $title = strtolower($title);
      $author = strtolower($author);
      $subject = strtolower($subject);
      $category = strtolower($category);

      //Setting the properties of the book object 
      $book->setTitle($title);
      $book->setAuthor($author);
      $book->setSubject($subject);
      $book->setYear($year);
      $book->setCategory($category);

      //Calling the addBook method to add the book
      $BookDB->addBook($book);

      header('Location: .?action=books');
      break;
    //This action will bring the user to the search books page
    case 'search_books':
      include('search_books.php');
      break;
    //This action will bring the user to the search by title page 
    case 'search_by_title':
      include('search_title.php');
      break;
    //This action will bring the user to the search by author page
    case 'search_by_author':
      include('search_author.php');
      break;
    //This action will bring the user to the search by subject page 
    case 'search_by_subject':
      include('search_subject.php');
      break; 
    //This action will bring the user to search by year page.
    case 'search_by_year':
      include('search_year.php');
      break;
    //The actions below this point deal with user searches 
    case 'title_search':

      //Getting the user input for the title
      $title = filter_input(INPUT_POST, 'title');

      //Lowercasing all of the words in the string.
      $title = strtolower($title);

      //Using the search by title method to see if the database contains the book. 
      $book = $BookDB->searchByTitle($title);

      include('title_results.php');
      break;
    case 'author_search':

      //Getting the user input 
      $author = filter_input(INPUT_POST, 'author');

      //Lowercasing all of the words in the string.
      $author = strtolower($author);

      //Searching for all books who were written by the author
      $books = $BookDB->searchByAuthor($author);

      include('author_results.php');
      break;
    case 'subject_search':

      //Getting the user input 
      $subject = filter_input(INPUT_POST, 'subject');

      //Lowercasing all of the words in the string.
      $subject = strtolower($subject);

      //Searching for all books based on the subject
      $books = $BookDB->searchBySubject($subject);

      include('subject_results.php');
      break;
    case 'year_search':

      //Getting the user input
      $year = filter_input(INPUT_POST, 'year');

      //Searching for a book based on the year 
      $books = $BookDB->searchByYear($year);

      include('year_results.php');
      break;
  }

?>


