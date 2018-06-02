<?php include '../view/header.php';  ?>

<!-- Start of main area -->
<main>

<!--heading area -->
<h1 class='director_heading'>Search for Movie By Director</h1>

<!-- form area -->
<form>
  <input id='director' placeholder='Director'><br>
  <div>
    <input onclick='getMovieByDirector(); return false;' class='button' type="submit" value="Search By Director" />
  </div>
</form>
<!-- End of form area -->

<br>

<div id="txtHint">
  <b>Movie info will be listed here...</b>
  <div>
</div>

</main>
<!-- End of main area -->


<script type="text/javascript" src='../assets/js/index.js'></script>
<?php include '../view/footer.php'; ?>