<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/generic.css">
<link rel="stylesheet" type="text/css" href="../assets/css/books.css">

<!-- Start of main area -->
<main>

  <div>  
    <h3>Please Enter Title of the Book To Search For</h3>
  </div>

  <form action="index.php" method="post">

    <input type="hidden" name="action" value="title_search" />

    <input placeholder='Title' type='text' name='title' required><br>
    <input class='button' type="submit" value="Search By Title" />

  </form>

</main>
<!-- End of main area -->


<?php include '../view/footer.php'; ?>