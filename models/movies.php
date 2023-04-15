<?php

class Movie
{   //construct title and genre
    public function __construct(public string $title, public string $genre)
    {
        $this->title = $title;
        $this->genre = $genre;
    }
    //getter
    public function getInfo()
    {
        $info = "Title: {$this->title}, Genre: {$this->genre}";
        return $info;
    }
}
