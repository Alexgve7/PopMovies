<?php 
require("../Alejandro/models/Gender.php");
    

if(empty ($_POST['name']) ){
    print 'esta vacio :v';
}
else
{
    $name = $_POST["name"];
$gender = new Gender();

$gender->gendername = $name;
$gender->save();
}
?>