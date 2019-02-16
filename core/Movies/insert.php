<?php 
require("../Alejandro/models/Gender.php");
    
$name = $_POST["name"];

$gender = new Gender();

$gender->gendername = $name;
$gender->save();

?>