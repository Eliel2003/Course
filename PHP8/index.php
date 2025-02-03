<?php
//Declaración de un arreglo
$frutas = ["Manzana","Pera","Uva","Fresa","Mango"];
//$forma1 = array("Manzana","Pera","Uva","Fresa","Mango");
$forma2 = ["Manzana","Pera","Uva","Fresa","Mango"];

foreach($frutas as $index => $fruta){
    echo "La fruta es ",$fruta, " - index {$index}" . "<br>";
}

//Areglos asociativos
$datos = [
    "nombre" => "Eliel",
    "apellido" => "Oliveros",
    "edad" => 22,
    "sexo" => "Masculino"
];

asort($frutas); //Ordenar de forma ascendente
arsort($frutas); //Ordenar de forma descendente
array_search("Uva",$frutas); //Buscar un elemento

//FUNCIONES DE ARREGLOS
echo count($frutas); //Contar elementos
echo "<br>";
echo array_pop($frutas); //Eliminar el ultimo elemento
echo "<br>";
echo array_shift($frutas); //Eliminar el primer elemento
echo "<br>";
echo array_unshift($frutas,"Manzana"); //Agregar un elemento al inicio
echo "<br>";
echo array_push($frutas,"Pera"); //Agregar un elemento al final
echo "<br>";

//echo array_reverse($frutas); //Invertir el orden de los elementos
echo "<br>";
echo in_array("Uva",$frutas); //Buscar un elemento
echo "<br>";
echo array_key_exists("nombre",$datos); //Buscar una clave
echo "<br>";
//echo array_values($frutas); //Obtener los valores de un arreglo
echo "<br>";
//echo array_keys($datos); //Obtener las claves de un arreglo
echo "<br>";
//echo array_merge($frutas, $forma2); //Unir dos arreglos
echo "<br>";
//echo array_splice($frutas, 1, 3); //Extraer una parte de un arreglo
echo "<br>";
echo array_sum([1,2,3,4,5]); //Sumar los elementos de un arreglo
echo "<br>";
echo array_rand($frutas); //Obtener un indice aleatorio
echo "<br>";
//echo array_unique($frutas); //Eliminar elementos duplicados
echo "<br>";
//echo array_chunk($frutas, 2); //Dividir un arreglo en partes
echo "<br>";












?>
 
 
 <!-- Código Obsoleto
 <script language="php"></script> 
  <% 
  %> -->