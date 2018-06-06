<?php include '../view/header.php'; ?>

<!-- Start of Main Section -->
<main>

  <div>
    <h1>Add Game</h1>
  </div>

  <!-- This form will allow the user to add a book -->
  <form action="index.php" method="post">

    <input type="hidden" name="action" value="add_movie_post" />

    <!-- The below inputs will deal with getting information for the book -->
    <input placeholder='Title' type='text' name='title' required><br>
    <input placeholder='Game Rating' type='text' name='rating' required><br>
    <input placeholder='Genre' type='text' name='genre' required><br>
    <input placeholder='Year' type='text' name='year' required><br>

    <input class='button' type="submit" value="Add Game" />

  </form>
  <!-- End of form element -->

</main>
<!-- End of Main Section -->


<?php include '../view/footer.php'; ?>
