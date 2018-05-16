<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/books.css">


<section>
  <h3>Please Enter Subject To Search For</h3>
  <form action="index.php" method="post">

    <input type="hidden" name="action" value="subject_search" />

    <input placeholder='Subject' type='text' name='subject'><br>
    <input type="submit" value="Search By Subject" />

  </form>
</section>


<?php include '../view/footer.php'; ?>