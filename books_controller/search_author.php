<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/books.css">


<section>
  <h3>Please Enter Author To Search For</h3>
  <form action="index.php" method="post">

    <input type="hidden" name="action" value="author_search" />

    <input placeholder='Author' type='text' name='author'><br>
    <input type="submit" value="Search By Author" />

  </form>
</section>


<?php include '../view/footer.php'; ?>