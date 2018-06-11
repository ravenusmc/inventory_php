<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/games.css">

<!-- Main Area -->
<main>

<h1>Search for Game By Genre</h1>

<form>
  <input id='genre' placeholder='Genre'><br>
  <br>
  <div>
    <input onclick='getGameGenre(); return false;' class='button' type="submit" value="Search By Genre" />
  </div>
</form>

<br>

<div id="txtHint">
  <b>Game info will be listed here...</b>
  <div>
</div>

</main>
<!-- End of Main Area -->

<script type="text/javascript" src='../assets/js/games.js'></script>
<?php include '../view/footer.php'; ?>