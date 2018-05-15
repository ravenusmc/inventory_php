<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/books.css">

<!-- start of header section -->
<header>
  <h1>Please Select Method to Search for Book</h1>
</header>
<!-- End of header section --> 

<!-- start of main section --> 
<main>

  <div>
    <h3><a href="?action=search_by_title">Title</a></h3>
  </div>

  <div>
    <h3><a href="?action=search_by_author">Author</a></h3>
  </div>

  <div>
    <h3><a href="?action=search_by_subject">Subject</a></h3>
  </div>

  <div>
    <h3><a href="?action=search_by_year">Year</a></h3>
  </div>

</main>
<!-- --> 

<?php include '../view/footer.php'; ?>