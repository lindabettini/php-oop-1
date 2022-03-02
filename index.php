<?php

include './data/movies.php';

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
  <article>
    <img src="<?= $movie1->poster ?>" alt="<?= $movie1->title ?>">
    <h3><?= $movie1->title ?></h3>
    <div><?= $movie1->release_date ?></div>
    <div>Votato: <br> <?= $movie1->vote_avarage ?></div>
  </article>

</body>

</html>