<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/books.css">

<main>
  
  <h1>Books By Year Results</h1>

  <?php foreach ($books as $book) : ?>
    <p><?php echo $book->getTitle(); ?></p>
    <p><?php echo $book->getAuthor(); ?></p>
    <p><?php echo $book->getSubject(); ?></p>
     <p><?php echo $book->getYear(); ?></p>
  <?php endforeach; ?>

</main>



<?php include '../view/footer.php'; ?>