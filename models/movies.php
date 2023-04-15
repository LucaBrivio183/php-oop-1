<?php
require_once __DIR__ . '/models/genres.php';

class Movie
{
    //save genres attributes
    public $genres;
    //construct title and genre class

    public function __construct(public string $title, Genres $_genres)
    {
        $this->title = $title;
        $this->genres = $_genres;
    }
    //getter
    public function getInfo()
    {
        $info = "Title: {$this->title}, Genres: {$this->genres}";
        return $info;
    }
}
