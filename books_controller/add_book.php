<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/generic.css">
<link rel="stylesheet" type="text/css" href="../assets/css/books.css">

<!-- Start of Main Section -->
<main>

  <div>
    <h1>Add Book</h1>
  </div>

  <!-- This form will allow the user to add a book -->
  <form action="index.php" method="post">

    <input type="hidden" name="action" value="add_book_post" />

    <!-- The below inputs will deal with getting information for the book -->
    <input placeholder='Title' type='text' name='title' required><br>
    <input placeholder='Author' type='text' name='author' required><br>
    <input placeholder='subject' type='text' name='subject' required><br>
    <input placeholder='year' type='text' name='year' required><br>
    <input type='radio' name='category' value='fiction'>Fiction<br>
    <input type='radio' name='category' value='non-fiction'>NonFiction<br>

    <input class='button' type="submit" value="Add Book" />

  </form>
  <!-- End of form element -->

</main>
<!-- End of Main Section -->

<?php include '../view/footer.php'; ?>