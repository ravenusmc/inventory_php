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




  }

?>