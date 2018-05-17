<?php include '../view/header.php'; ?> 
<link rel="stylesheet" type="text/css" href="../assets/css/books.css">


<section>
  <h3>Please Enter a Year</h3>
  <form action="index.php" method="post">

    <input type="hidden" name="action" value="year_search" />

    <input placeholder='Year' type='text' name='year'><br>
    <input type="submit" value="Search By Year" />

  </form>
</section>


<?php include '../view/footer.php'; ?>