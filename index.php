<?php
require_once "./classes/Movie.php";

$avatar = new Movie("Avatar", "Adventure", 8.0, "USA");
$top_gun = new Movie("Top Gun", "Action", 7.5, "USA");

var_dump($avatar);
var_dump($top_gun);


echo $avatar->creaFrase() ;
?>