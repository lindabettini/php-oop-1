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

  public function printTitle()
  {
    $cardTitle = $this->title;
    return $cardTitle;
  }
}


$moviesList = [
  [
    'title' => "Il Signore degli Anelli - La compagnia dell'anello",
    'year' => '2001',
    'url' => './img/compagnia-dell-anello.jfif',
    'genre' => 'Fantasy',
    'vote' => 5
  ],

  [
    'title' => "Il Signore degli Anelli - Le Due Torri",
    'year' => '2001',
    'url' => './img/le-due-torri.jfif',
    'genre' => 'Fantasy',
    'vote' => 5
  ],

  [
    'title' => "Il Signore degli Anelli - Il Ritorno del Re",
    'year' => '2001',
    'url' => './img/il-ritorno-del-re.jfif',
    'genre' => 'Fantasy',
    'vote' => 5
  ],
];
