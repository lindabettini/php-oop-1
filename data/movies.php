<?php

class Movie
{
  public $title;
  public $release_date;
  public $poster;
  public $genre;
  public $vote_average;

  public function __construct($title, $release_date, $poster, $genre, $vote_avarage)
  {
    $this->title = $title;
    $this->release_date = $release_date;
    $this->poster = $poster;
    $this->genre = $genre;
    $this->vote_avarage = $vote_avarage;
  }
}

$movie1 = new Movie("Il Signore degli Anelli - La compagnia dell'anello", '18-12-2001', './img/compagnia-dell-anello.jfif', 'Fantasy', 5);

$movie2 = new Movie("Il Signore degli Anelli - Le Due Torri", '18-12-2002', './img/le-due-torri.jfif', 'Fantasy', 5);

$movie3 = new Movie("Il Signore degli Anelli - Il Ritorno del Re", '01-12-2003', './img/il-ritorno-del-re.jfif', 'Fantasy', 5);
