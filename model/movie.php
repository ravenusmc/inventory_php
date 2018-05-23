<?php
  
  //The code in this file will hold the movie class.
  class Movie {

    private $id, $title, $director, $genre, $year;

    public function __construct() {
        $this->id = 0;
        $this->title = '';
        $this->director = '';
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

    public function getDirector() {
        return $this->director;
    }

    public function setDirector($value) {
        $this->director = $value;
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