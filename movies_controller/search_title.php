<?php include '../view/header.php';  ?>

<main>

<h1>Search for Movie By Title</h1>

<form>
  <input id='title' placeholder='Title'><br>
  <input onclick='getMovieTitle(); return false;' class='button' type="submit" value="Search By Title" />
</form>

<div id="txtHint">
  <b>Movie info will be listed here...</b>
</div>

</main>



<script type="text/javascript" src='../assets/js/index.js'></script>
<?php include '../view/footer.php'; ?>