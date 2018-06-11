<?php 

  class GameDB {

    //This method will add a game to the database.
    public static function addGame($game) {

      $db = Database::getDB();

      $title = $game->getTitle();
      $rating = $game->getRating();
      $genre = $game->getGenre();
      $year = $game->getYear();

      $query = 'INSERT INTO games
        (title, rating, genre, year)
        VALUES 
        (:title, :rating, :genre, :year)';

      $statement = $db->prepare($query);
      $statement->bindValue(':title', $title);
      $statement->bindValue(':rating', $rating);
      $statement->bindValue(':genre', $genre);
      $statement->bindValue(':year', $year);
      $statement->execute();
      $statement->closeCursor();

    }

    //This method will search for a game based on a title 
    public static function searchByTitle($title) {

      $db = Database::getDB();

      $query = 'SELECT * from games
                WHERE title = :title';
      $statement = $db->prepare($query);
      $statement->bindValue(':title', $title);
      $statement->execute();
      $row = $statement->fetch();
      $statement->closeCursor();

      $game = new Game();

      $game->setId($row['game_id']);
      $game->setTitle($row['title']);
      $game->setRating($row['rating']);
      $game->setGenre($row['genre']);
      $game->setYear($row['year']);

      return $game;

    }

    //This method will search for a game based on a genre
    public static function searchByGenre($genre) {
      
    }


  }

?>