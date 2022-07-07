<?php

class Movie {
    public $titolo;
    public $regista;
    public $anno;
    public $rating;
    public $best;


    public function __construct($_titolo, $_regista, $_anno, $_rating)
    {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->anno = $_anno;
        $this->rating = $_rating;
        $this->fanVote();
    }

    public function fanVote() 
    {
        if ($this->rating > 8.4) {
            $this->best = 'TOP MOVIE';
        } else if ($this->rating < 8.5 and $this->rating > 7.4) {
            $this->best = 'VERY GOOD MOVIE';
        }
         else if ($this->rating < 7.5 || $this->rating > 5.9) {
            $this->best = 'GOOD MOVIE';
        }
        else  {
            $this->best = 'FLOP MOVIE';
        }
    }
}




