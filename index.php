<?php

require './data/movies.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Movies Oop !</title>
</head>

<body>
  <?php foreach ($movies as $movie) :
    $m = new Movie($movie['title'], $movie['release_date'], $movie['poster'], $movie['genre'], $movie['vote_avarage']);
  ?>
    <article>
      <h1><?= $m->title ?></h1>
    </article>
  <?php endforeach; ?>
</body>

</html>