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

    //This method will allow the user to search for movies by a certain director.
    public static function searchByDirector($director){

      $db = Database::getDB();
      $movies = array();

      $query = 'SELECT * from movies
         WHERE director = :director';

      $statement = $db->prepare($query);
      $statement->bindValue(':director', $director);
      $statement->execute();
      $rows = $statement->fetchAll();
      $statement->closeCursor();

      foreach ($rows as $row) {
        $movie = new Movie();
        $movie->setTitle($row['title']);
        $movie->setDirector($row['director']);
        $movie->setGenre($row['genre']);
        $movie->setYear($row['year']);

        $movies[] = $movie;
      }
      
      return $movies;
    }

    //This method will allow the user to search for a movie based on a year.
    public static function searchByYear($year) {

      $db = Database::getDB();
      $movies = array();

      $query = 'SELECT * from movies
         WHERE year = :year';

      $statement = $db->prepare($query);
      $statement->bindValue(':year', $year);
      $statement->execute();
      $rows = $statement->fetchAll();
      $statement->closeCursor();

      foreach ($rows as $row) {
        $movie = new Movie();
        $movie->setTitle($row['title']);
        $movie->setDirector($row['director']);
        $movie->setGenre($row['genre']);
        $movie->setYear($row['year']);

        $movies[] = $movie;
      }
      
      return $movies;
    }

    //This method will search for all movies by a specific genre. 
    public static function searchByGenre($genre) {

      $db = Database::getDB();
      $movies = array();

      $query = 'SELECT * from movies
         WHERE genre = :genre';

      $statement = $db->prepare($query);
      $statement->bindValue(':genre', $genre);
      $statement->execute();
      $rows = $statement->fetchAll();
      $statement->closeCursor();

      foreach ($rows as $row) {
        $movie = new Movie();
        $movie->setTitle($row['title']);
        $movie->setDirector($row['director']);
        $movie->setGenre($row['genre']);
        $movie->setYear($row['year']);

        $movies[] = $movie;
      }
      
      return $movies;

    }

    //This method will get the genre's so that the user may select on from the database
    public static function getGengre() {

      $db = Database::getDB();
      $genres = array();

      $query = 'SELECT DISTINCT genre from movies';

      $statement = $db->prepare($query);
      $statement->execute();
      $rows = $statement->fetchAll();
      $statement->closeCursor();

      foreach ($rows as $row) {
        $movie = new Movie();
        $movie->setGenre($row['genre']);
        $genres[] = $movie;
      }
      
      return $genres;

    }




  }

?>