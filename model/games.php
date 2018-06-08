<?php 
  
  class Game {

    private $id, $title, $rating, $genre, $year;

    public function __construct() {
      $this->id = 0;
      $this->title = '';
      $this->rating = 0;
      $this->genre = '';
      $this->year = 0;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($value) {
        $this->title = $value;
    }

    public function getRating() {
        return $this->rating;
    }

    public function setRating($value) {
        $this->rating = $value;
    }

        public function getGenre() {
        return $this->genre;
    }

    public function setGenre($value) {
        $this->genre = $value;
    }


    public function getYear() {
        return $this->year;
    }

    public function setYear($value) {
        $this->year = $value;
    }

  }




?>