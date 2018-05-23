<?php include '../view/header.php'; ?>

<!-- Start of Main Section -->
<main>

  <div>
    <h1>Add Movie</h1>
  </div>

  <!-- This form will allow the user to add a book -->
  <form action="index.php" method="post">

    <input type="hidden" name="action" value="add_movie_post" />

    <!-- The below inputs will deal with getting information for the book -->
    <input placeholder='Title' type='text' name='title' required><br>
    <input placeholder='Director' type='text' name='director' required><br>
    <input placeholder='Genre' type='text' name='genre' required><br>
    <input placeholder='year' type='text' name='year' required><br>

    <input class='button' type="submit" value="Add Movie" />

  </form>
  <!-- End of form element -->

</main>
<!-- End of Main Section -->


<?php include '../view/footer.php'; ?>