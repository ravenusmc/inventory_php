<?php include '../view/header.php'; ?>

<main>

  <h1>Search for Movie By Year</h1>

  <form>
    <input id='year' placeholder='Year'><br>
    <div>
      <input onclick='getMovieByYear(); return false;' class='button' type="submit" value="Search By Year" />
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