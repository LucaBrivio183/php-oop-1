<?php

require_once __DIR__ . '/models/movies.php';

//instance 2 different movies
$Everything_Everywhere_All_at_Once = new Movie('Everything Everywhere All at Once', 'Sci-fi');
$Melancholia = new Movie('Melancholia', 'Drama');

//print info
var_dump($Everything_Everywhere_All_at_Once->getInfo());
var_dump($Melancholia->getInfo());
