<?php
  
  class Book {

    private $title, $author, $subject, $year, $category;  

    public function __construct() {
        $this->title = '';
        $this->author = '';
        $this->subject = '';
        $this->year = 0;
        $this->category = '';
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($value) {
        $this->title = $value;
    }

    public function getauthor() {
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
        return $this->subject;
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