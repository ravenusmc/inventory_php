<?php include '../view/header.php'; ?>

<main>

  <h1>Search for Movie By Genre</h1>

  <form>
    <!-- <input id='genre' placeholder='Genre'><br> -->
    <div>
      <select name='genre' id='genre'>
        <?php foreach ($genres as $genre) : ?>
          <option value='<?php echo $genre->getGenre(); ?>'><?php echo $genre->getGenre(); ?></option>
        <?php endforeach; ?>
      </select>
      <input onclick='getMovieByGenre(); return false;' class='button' type="submit" value="Search By Genre" />
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
