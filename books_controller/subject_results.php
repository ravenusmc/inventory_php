<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/books.css">

<!-- Start of main area -->
<main>
  
  <h1>Books By Subject Results</h1>

  <div class='results_area'>
    <?php foreach ($books as $book) : ?>
      <div class='results_card'>
        <p><?php echo $book->getTitle(); ?></p>
        <p><?php echo $book->getAuthor(); ?></p>
        <p><?php echo $book->getSubject(); ?></p>
        <p><?php echo $book->getYear(); ?></p>
      </div>
    <?php endforeach; ?>
  </div>

</main>
<!-- End of main area -->

<?php include '../view/footer.php'; ?>

