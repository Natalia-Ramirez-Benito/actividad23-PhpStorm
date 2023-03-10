<?php
/*echo("hola mundo");
$mensaje="en un lugar de la mancha";
var_dump($mensaje);
$mensaje="";
var_dump($mensaje);
$mensaje=null;
var_dump($mensaje);
unset($mensaje);
//var_dump($mensaje);
*/



if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $ciudad = strtolower($_POST['ciudad']);
    $ciudadValida = array('madrid', 'sevilla', 'toledo', 'córdoba', 'badajoz', 'zamora');
    if (in_array($ciudad,$ciudadValida)) {
        echo "<h3>Bienvenido!</h3>";
    } else {
        echo "<h3>La ciudad no existe</h3>";
    }
}

