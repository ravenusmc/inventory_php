<?php include '../view/header.php';  ?>

<!-- Main Area -->
<main>

<h1>Search for Movie By Title</h1>

<form>
  <input id='title' placeholder='Title'><br>
  <div>
    <input onclick='getMovieTitle(); return false;' class='button' type="submit" value="Search By Title" />
  </div>
</form>

<br>

<div id="txtHint">
  <b>Movie info will be listed here...</b>
  <div>
</div>

</main>
<!-- End of Main Area -->



<script type="text/javascript" src='../assets/js/index.js'></script>
<?php include '../view/footer.php'; ?>