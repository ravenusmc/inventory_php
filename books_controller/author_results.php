<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/movies.css">

<!-- Start of main area -->
<main>
  
  <h1>Author Search Results</h1>

  <div class='results_area'>
    <?php foreach ($books as $book) : ?>
      <div class='results_card'>
        <p><?php echo $book->getTitle(); ?></p>
        <p><?php echo $book->getAuthor(); ?></p>
        <p><?php echo $book->getSubject(); ?></p>
      </div>
    <?php endforeach; ?>
  </div>

</main>
<!-- End of main area -->


<?php include '../view/footer.php'; ?>