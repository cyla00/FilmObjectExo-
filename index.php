<?php
require 'header.php';

require 'film.php';
if(isset($_GET['submit'])){
  $film = new Film();

  $film->setId($_GET['id']);
  $film_id = $film->getId();

  $film->setName($_GET['name']);
  $film_name = $film->getName();

  $film->setAuthor($_GET['author']);
  $film_author = $film->getAuthor();

  $film->setYear($_GET['year']);
  $film_year = $film->getYear();

  if(!empty($film_id) && !empty($film_name) && !empty($film_author) && !empty($film_year)){
    echo "<h1>".$film_name."</h1>";
    echo "<p>was made by ".$film_author." in the year ".$film_year.".<br>id reference: ".$film_id.".</p>";
  }
  else{
    echo "<br>fill all cases!!";
  }
}
else{
  header("Location: index.php");
}

require 'footer.php';


 ?>
