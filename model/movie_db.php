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

    //This method will search for a movie by title 
    public static function searchByTitle($title) {
      $db = Database::getDB();

      $query = 'SELECT * from movies
                WHERE title = :title';
      $statement = $db->prepare($query);
      $statement->bindValue(':title', $title);
      $statement->execute();
      $row = $statement->fetch();
      $statement->closeCursor();

      $movie = new Movie();

      $movie->setId($row['movie_id']);
      $movie->setTitle($row['title']);
      $movie->setDirector($row['director']);
      $movie->setGenre($row['genre']);
      $movie->setYear($row['year']);

      return $movie;

    }



  }

?>