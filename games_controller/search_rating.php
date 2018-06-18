<?php include '../view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="../assets/css/games.css">

<!-- Main Area -->
<main>

<h1>Search for Games By Rating</h1>

<form>
  <input id='rating' placeholder='Rating'><br>
  <p></p>
  <select id='above_or_below' name='above_or_below'>
      <option value='above'>Above</option>
      <option value='below'>Below</option>
    </select>
  <p></p>
  <div>
    <input onclick='getGameRating(); return false;' class='button' type="submit" value="Search By Rating" />
  </div>
</form>

<br>

<div id="txtHint">
  <b>Game(s) info will be listed here...</b>
  <div>
</div>

</main>
<!-- End of Main Area -->


<script type="text/javascript" src='../assets/js/games.js'></script>
<?php include '../view/footer.php'; ?>