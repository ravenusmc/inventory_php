<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/books.css">

<!-- Start of the main area --> 
<main>

  <div>
    <h3>Please Enter Author To Search For</h3>
  </div>

  <form action="index.php" method="post">

    <input type="hidden" name="action" value="author_search" />

    <input placeholder='Author' type='text' name='author'><br>
    <input class='button' type="submit" value="Search By Author" />

  </form>
</main>
<!-- End of the main area -->

<?php include '../view/footer.php'; ?>