<?php

require_once __DIR__ . '/models/movies.php';
require_once __DIR__ . '/models/genres.php';

//instance 2 different movies
$Everything_Everywhere_All_At_Once_Genres = new Genres('Sci-fi', 'Comedy');
$Everything_Everywhere_All_At_Once = new Movie('Everything Everywhere All at Once', $Everything_Everywhere_All_At_Once_Genres);
//$Melancholia = new Movie('Melancholia', 'Drama');

//print info
var_dump($Everything_Everywhere_All_at_Once);
//var_dump($Melancholia);
