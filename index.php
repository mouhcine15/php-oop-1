<?php
include __DIR__ . '/Movie.php';

$matrix = new Movie('Matrix', 'Andy Wachowski', '1999', 8.7);

$titanic = new Movie('Titanic', 'James Cameron', '1997', 7.9);

$sogni = new Movie('I sogni segreti di Walter Mitty', 'Ben Stiller', '2013', 7.3);

$vicini = new Movie('Cattivi vicini 2', 'Nicholas Stoller', '2016', 5.7);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <h3>
            Titolo: <?= $matrix->titolo ?>
        </h3>
        <div>
            Regista: <?= $matrix->regista ?>
        </div>
        <div>
            Anno: <?= $matrix->anno ?>
        </div>
        <div>
            IMDb rating: <?= $matrix->rating?>/10
        </div>
        <div>
            Our site Rating: <?= $matrix->best?>
        </div>

    </div>

    <div>
        <h3>
            Titolo: <?= $titanic->titolo ?>
        </h3>
        <div>
            Regista: <?= $titanic->regista ?>
        </div>
        <div>
            Anno: <?= $titanic->anno ?>
        </div>
        <div>
            IMDb rating: <?= $titanic->rating?>/10
        </div>
        <div>
            Our site Rating: <?= $titanic->best?>
        </div>

    </div>
    
    <div>
        <h3>
            Titolo: <?= $sogni->titolo ?>
        </h3>
        <div>
            Regista: <?= $sogni->regista ?>
        </div>
        <div>
            Anno: <?= $sogni->anno ?>
        </div>
        <div>
            IMDb rating: <?= $sogni->rating?>/10
        </div>
        <div>
            Our site Rating: <?= $sogni->best?>
        </div>

    </div>

    <div>
        <h3>
            Titolo: <?= $vicini->titolo ?>
        </h3>
        <div>
            Regista: <?= $vicini->regista ?>
        </div>
        <div>
            Anno: <?= $vicini->anno ?>
        </div>
        <div>
            IMDb rating: <?= $vicini->rating?>/10
        </div>
        <div>
            Our site Rating: <?= $vicini->best?>
        </div>

    </div>
    

    
</body>
</html>

