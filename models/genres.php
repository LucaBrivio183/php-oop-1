<?php

class Genres
{   //construct genres list (2 for now)
    public function __construct(public string $genre1, public string $genre2)
    {
        $this->genre1 = $genre1;
        $this->genre2 = $genre2;
    }
}
