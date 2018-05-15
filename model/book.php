<?php
  
  class Book {

    private $title, $author, $subject, $year, $category;  

    public function __construct() {
        $this->id = 0;
        $this->title = '';
        $this->author = '';
        $this->subject = '';
        $this->year = 0;
        $this->category = '';
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

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($value) {
        $this->author = $value;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setSubject($value) {
        $this->subject = $value;
    }

    public function getYear() {
        return $this->year;
    }

    public function setYear($value) {
        $this->year = $value;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($value) {
        $this->category = $value;
    }

  }


?>