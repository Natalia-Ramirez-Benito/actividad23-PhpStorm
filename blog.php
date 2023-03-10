<?php
include('header.html');
//echo "<h2>hola</h2>";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $fecha = ($_POST['fecha']);
    $fechaformat = DateTime::createFromFormat('Y-m-d', $fecha);
    $dia_semana = $fechaformat -> format('j');

    switch ($dia_semana) {
        case 3:
        case 5:
        case 13:
        case 1:
            echo "<h2>Día seleccionado: ".$dia_semana.". Tienes horario mañana</h2>";
            break;
        case 14:
        case 28:
        case 24:
        case 10:
            echo "<h2>Día selccionado: ".$dia_semana.". Tienes horario de tarde</h2>";
            break;
        case 8:
        case 15:
        case 2:
            echo "<h2>Día selccionado: ".$dia_semana.".No hay clases</h2>";
            break;
        default:
            echo "<h2>Día selccionado: ".$dia_semana.".No hay nada definido</h2>";
            break;
    }
}
$dia_actual = date('d', time());
echo "<h2>Hoy es día: ".$dia_actual."</h2>";

include('footer.html');
