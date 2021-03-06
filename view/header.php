<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
  <title>Inventory System</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../assets/css/generic.css">
</head>

  <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="/home">Inventory System</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="../category_controller/categories.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Books area
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../books_controller/add_book.php">Add Book</a>
            <a class="dropdown-item" href="../books_controller/search_title.php">Search By Title</a>
            <a class="dropdown-item" href="../books_controller/search_author.php">Search By Author</a>
            <a class="dropdown-item" href="../books_controller/search_subject.php">Search By Subject</a>
            <a class="dropdown-item" href="../books_controller/search_year.php">Search By Year</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Movies Area
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../movies_controller/add_movie.php">Add Movie</a>
            <a class="dropdown-item" href="../movies_controller/search_title.php">Search By Title</a>
            <a class="dropdown-item" href="../movies_controller/search_director.php">Search By Director</a>
            <a class="dropdown-item" href="../movies_controller/search_genre.php">Search By Genre</a>
            <a class="dropdown-item" href="../movies_controller/search_year.php">Search By Year</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Games Area
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../games_controller/add_game.php">Add Game</a>
            <a class="dropdown-item" href="../movies_controller/search_title.php">Search By Title</a>
            <a class="dropdown-item" href="../movies_controller/search_director.php">Search By Director</a>
            <a class="dropdown-item" href="../movies_controller/search_genre.php">Search By Genre</a>
            <a class="dropdown-item" href="../movies_controller/search_year.php">Search By Year</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>


<!-- the body section -->
<body>