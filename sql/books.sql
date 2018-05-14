--The code in here will deal with the books sql tables 

CREATE TABLE books (
  book_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(50) NOT NULL,
  author VARCHAR(50) NOT NULL,
  subject VARCHAR(25) NOT NULL,
  year INT NOT NULL, 
  category VARCHAR(15) NOT NULL
);

