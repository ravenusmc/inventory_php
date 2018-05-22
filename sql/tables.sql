--The code in here will deal with the sql tables for this project

CREATE TABLE books (
  book_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(50) NOT NULL,
  author VARCHAR(50) NOT NULL,
  subject VARCHAR(25) NOT NULL,
  year INT NOT NULL, 
  category VARCHAR(15) NOT NULL
);


CREATE TABLE movies (
  movie_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(50) NOT NULL,
  director VARCHAR(50) NOT NULL,
  genre VARCHAR(25) NOT NULL,
  year INT NOT NULL
);

