<?
$promedio = 10;
$faltas = "No";

//Operador ternario ?
echo ($promedio >= 7 && $faltas == "No") ? "Aprobado" : "Reprobado"; 


//Sentencia if else
if ($promedio >= 7 && $faltas == "No") {
    echo "Aprobado";
} else if($fatlas == "Si"){
    echo "Reprobaste por faltas";
} else {
    echo "Reprobado";
}   


//Sentencia switch
switch ($promedio) {
    case 10:
        echo "Excelente";
        break;
    case 9:
        echo "Muy bien";
        break;
    case 8:
        echo "Bien";
        break;
    case 7:
        echo "Regular";
        break;
    default:
        echo "Reprobado";
        break;
}


// sentencia match (PHP 8)
echo match ($promedio) {
    10 => "Excelente",
    9 => "Muy bien",
    8 => "Bien",
    7 => "Regular",
    default => "Reprobado",
};



//ESTRUCTURAS DE CONTROL INTERACTIVAS
//ciclo while
$contador = 0;
while ($contador <= 100) {
    echo "Linea n°", $contador;
    $contador++;
}


//ciclo do while
$contador = 0;
do {
    echo "Linea n°", $contador;
    $contador++;
} while ($contador <= 100);


//Ciclo for
for ($i = 1; $i <= 10; $i++) {
    echo "Valor de variable: ", $i;
    echo "<br>";
}

//Ciclo foreach
$array = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];
foreach ($array as $dia) {
    echo "Hoy es día: ", $dia;
    echo "<br>";
}

?>