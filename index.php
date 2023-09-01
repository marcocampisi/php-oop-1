<?php

class Movie
{
    public $title;
    public $genre;
    public $year;

    public function __construct($title, $genre, $year) {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    public function printInfo() {
        echo "Titolo: ".$this->title."<br>";
        echo "Genere: ".$this->genre."<br>";
        echo "Anno: ".$this->year."<br>";
    }

}

$movie1 = new Movie("Memento", "Thriller", 2000);
$movie2 = new Movie("Interstellar", "Science Fiction", 2014);

echo "Film 1:<br>";
$movie1->printInfo();
echo "<br>";

echo "Film 2:<br>";
$movie2->printInfo();

?>