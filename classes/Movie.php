<?php
class Movie{

    public $title;
    public $genre;
    public $rating;
    public $nationality;

    function __construct($_title, $_genre, $_rating, $_nationality){

        $this->title = $_title;
        $this->genre = $_genre;
        $this->rating = $_rating;
        $this->nationality = $_nationality;

    }

    public function getGenre() {
    
        return $this->genre;
    }

    public function creaFrase(){

        $frase="Ciao sono una frase di prova" ;

        return $frase ;
    }
}
?>