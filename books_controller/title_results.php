<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/books.css">

<main>
  
  <div class='single_result'>
    <h3><?php echo $book->getTitle(); ?></h3>
    <h3><?php echo $book->getAuthor(); ?></h3>
    <h3><?php echo $book->getSubject(); ?></h3>
    <h3><?php echo $book->getYear(); ?></h3>
    <h3><?php echo $book->getCategory(); ?></h3>
  </div>

</main>


<?php include '../view/footer.php'; ?>