<?php include '../view/header.php';  ?>

<main>

<h1>Search for Movie By Director</h1>

<form>
  <input id='director' placeholder='Director'><br>
  <div>
    <input onclick='getMovieByDirector(); return false;' class='button' type="submit" value="Search By Director" />
  </div>
</form>

<br>

<div id="txtHint">
  <b>Movie info will be listed here...</b>
  <div>
</div>

</main>


<script type="text/javascript" src='../assets/js/index.js'></script>
<?php include '../view/footer.php'; ?>