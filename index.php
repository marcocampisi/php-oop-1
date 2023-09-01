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
        echo "Titolo: ".$this->genre."<br>";
        echo "Titolo: ".$this->year."<br>";
    }

}

?>