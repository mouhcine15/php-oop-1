<?php
include __DIR__ . '/Movie.php';

$matrix = new Movie();
$matrix-> titolo = "Matrix";
$matrix-> regista = "Andy Wachowski";

var_dump($matrix);