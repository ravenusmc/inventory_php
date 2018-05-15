<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/books.css">


<section>
  <h3>Please Enter Title of the Book To Search For</h3>
  <form action="index.php" method="post">

    <input type="hidden" name="action" value="title_search" />

    <input placeholder='Title' type='text' name='title'><br>
    <input type="submit" value="Search By Title" />

  </form>
</section>


<?php include '../view/footer.php'; ?>