<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/games.css">

<!-- Main Area -->
<main>

<h1>Search for Game By Title</h1>

<form>
  <input id='title' placeholder='Title'><br>
  <br>
  <div>
    <input onclick='getGameTitle(); return false;' class='button' type="submit" value="Search By Title" />
  </div>
</form>

<br>

<div id="txtHint">
  <b>Game info will be listed here...</b>
  <div>
</div>

</main>
<!-- End of Main Area -->


<?php include '../view/footer.php'; ?>