<?php include '../view/header.php'; ?> 
<link rel="stylesheet" type="text/css" href="../assets/css/generic.css">
<link rel="stylesheet" type="text/css" href="../assets/css/books.css">

<!-- Start of main section -->
<main>

  <div>
    <h3>Please Enter a Year</h3>
  </div>

  <form action="index.php" method="post">

    <input type="hidden" name="action" value="year_search" />

    <input placeholder='Year' type='text' name='year'><br>
    <input class='button' type="submit" value="Search By Year" />

  </form>

</main>
<!-- End of main section -->


<?php include '../view/footer.php'; ?>