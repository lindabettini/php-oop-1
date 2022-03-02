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

$movie1 -> new Movie("Il Signore degli Anelli - La compagnia dell'anello", '18-12-2001', './img/compagnia-dell-anello.jfif', 'Fantasy', 5);
