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


  }



?>