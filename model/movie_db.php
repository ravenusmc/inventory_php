<?php
  
  class MovieDB {

    //This method will add a movie to the database.
    public static function addMovie($movie) {
      $db = Database::getDB();

      $title = $movie->getTitle();
      $director = $movie->getDirector();
      $genre = $movie->getGenre();
      $year = $movie->getYear();

      $query = 'INSERT INTO movies
        (title, director, genre, year)
        VALUES 
        (:title, :director, :genre, :year)';
      $statement = $db->prepare($query);
      $statement->bindValue(':title', $title);
      $statement->bindValue(':director', $director);
      $statement->bindValue(':genre', $genre);
      $statement->bindValue(':year', $year);
      $statement->execute();
      $statement->closeCursor();
    }



  }

?>