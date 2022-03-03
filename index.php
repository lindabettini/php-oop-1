<?php

include './data/Movies.php';

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
  <?php foreach ($moviesList as $movie) : ?>
    <?php $movie = new Movie($movie['title'], $movie['year'], $movie['url'], $movie['genre'], $movie['vote']); ?>
    <article>
      <img src="<?= $movie->poster ?>" alt="<?= $movie->title ?>">
      <h3><?= $movie->title ?></h3>
      <div><?= $movie->release_date ?></div>
      <div>Votato: <br> <?= $movie->vote_avarage ?></div>
    </article>
  <?php endforeach; ?>
</body>

</html>