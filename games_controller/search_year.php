<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/games.css">

<!-- Start of main section -->
<main>

  <h1>Search for Game By Year</h1>

  <form>
    <input id='year' placeholder='Year'><br>
    <div>
      <input onclick='getGameByYear(); return false;' class='button' type="submit" value="Search By Year" />
    </div>
  </form>

  <br>

  <div id="txtHint">
    <b>Movie info will be listed here...</b>
    <div>
  </div>

</main>
<!-- End of Main Section -->

<script type="text/javascript" src='../assets/js/games.js'></script>
<?php include '../view/footer.php'; ?>