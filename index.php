<?php
    class Movie {
        public $titolo;
        public $regista;
        public $anno;
        public $rating;

        public function __construct($titolo, $regista, $anno, $rating) 
        {
            $this->titolo = $titolo;
            $this->regista = $regista;
            $this->anno = $anno;
            $this->setRating($rating);
        }
        public function setRating($_rating) 
        {
            if ($_rating === 5) {
                $this->rating = '5 STELLE!!!!!';
            } elseif ($_rating === 4) {
                $this->rating = '4 STELLE!!!!';
            } elseif ($_rating === 3) {
                $this->rating = '3 STELLE!!!';
            } elseif ($_rating === 2) {
                $this->rating = '2 STELLE!!';
            } elseif ($_rating === 1) {
                $this->rating = '1 STELLA!';
            } 
        }
    }

    $gatto = new Movie ('Il Gatto con gli stivali 2 - L\'ultimo desiderio', 'Joel Crawford', '2022', 5);
    $onePiece = new Movie ('One Piece Film: RED', 'Gorō Taniguchi', '2022', 3);
    $dune = new Movie ('Dune', 'Denis Villeneuve', '2021', 1);

    $movies = array($gatto, $onePiece, $dune);

    foreach ($movies as $movie) {
        echo $movie->titolo;
        echo ' / ';
        echo $movie->rating;
        echo '<br>';
    }