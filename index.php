<?php
    class Movie{
        public $title;
        public $genre;
        public $year;

        function __construct($_title, $_genre, $_year){
            $this->title = $_title;
            $this->genre = $_genre;
            $this->year = $_year;
        }

        public function getTitle()
        {
            return $this->title;
        }
    }

    $film_1 = new Movie ("The Shawshank Redemption","drammatico","1994");
    $film_2 = new Movie ("The Dark Knight","azione","2008");

    echo "<div>"."Titolo: ".$film_1->getTitle()."<br>"."Genere: ".$film_1->genre."<br>"."Anno di uscita: ".$film_1->year."<br><br></div>";
    echo "<div>"."Titolo: ".$film_2->getTitle()."<br>"."Genere: ".$film_2->genre."<br>"."Anno di uscita: ".$film_2->year."<br><br></div>";


?>