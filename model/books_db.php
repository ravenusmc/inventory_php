<?php
  
  class BookDB {

    //This method will add a book to the database.
    public static function addBook($book) {

      $db = Database::getDB();

       $title = $book->getTitle();
       $author = $book->getAuthor();
       $subject = $book->getSubject();
       $year = $book->getYear();
       $category = $book->getCategory();

      $query = 'INSERT INTO books
        (title, author, subject, year, category)
        VALUES 
        (:title, :author, :subject, :year, :category)';
      $statement = $db->prepare($query);
      $statement->bindValue(':title', $title);
      $statement->bindValue(':author', $author);
      $statement->bindValue(':subject', $subject);
      $statement->bindValue(':year', $year);
      $statement->bindValue(':category', $category);
      $statement->execute();
      $statement->closeCursor();
    }

    //This method will search for a book by title
    public static function searchByTitle($title) {

      $db = Database::getDB();

      $query = 'SELECT * from books
              WHERE title = :title';
      $statement = $db->prepare($query);
      $statement->bindValue(':title', $title);
      $statement->execute();
      $row = $statement->fetch();
      $statement->closeCursor();

      $book = new Book();

      $book->setId($row['book_id']);
      $book->setTitle($row['title']);
      $book->setAuthor($row['author']);
      $book->setSubject($row['subject']);
      $book->setYear($row['year']);
      $book->setCategory($row['category']);

      return $book; 

    }

    //This method will allow the user to search for an author 
    public static function searchByAuthor($author){

      $db = Database::getDB();
      $books = array();

      $query = 'SELECT * from books
         WHERE author = :author';

      $statement = $db->prepare($query);
      $statement->bindValue(':author', $author);
      $statement->execute();
      $rows = $statement->fetchAll();
      $statement->closeCursor();

      foreach ($rows as $row) {
        $book = new Book();
        $book->setTitle($row['title']);
        $book->setAuthor($row['author']);
        $book->setSubject($row['subject']);
        $book->setYear($row['year']);
        $book->setCategory($row['category']);

        $books[] = $book;
      }
      
      return $books;
    }

  }



?>