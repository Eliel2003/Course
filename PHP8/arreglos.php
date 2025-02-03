
<?
/* 
Un arreglo(Vector) es una colección ordenada de datos. 
Se emplean para almacenar múltiples valores en una sola variable. 
Para acceder a los elementos de un arreglo se emplea un índice numérico. 
Los arreglos en PHP pueden almacenar cualquier tipo de datos, incluso otros arreglos. */

//Declaración de un arreglo
$frutas = ["Manzana","Pera","Uva","Fresa","Mango"];
$forma1 = array("Manzana","Pera","Uva","Fresa","Mango");
$forma2 = ["Manzana","Pera","Uva","Fresa","Mango"];

foreach($forma1 as $index => $frutas){
    echo "La fruta es ",$frutas, " - index {$index}" . "<br>";
}

//Areglos asociativos
$datos = [
    "nombre" => "Eliel",
    "apellido" => "Oliveros",
    "edad" => 22,
    "sexo" => "Masculino"
];

var_dump($datos["edad"]);

foreach($datos as $key => $valor){
    echo "$key: $valor" . "<br>";
}

//Agregar un dato
array_push($forma1,"Papaya");
$datos["Altura"] = 1.73;

//Eliminar un dato
unset($forma1[0]);
unset($datos["sexo"]);

//modificar un dato
$forma1[0] = "Piña";
$datos["nombre"] = "Arturo";

asort($frutas); //Ordenar de forma ascendente

//FUNCIONES DE ARREGLOS
echo count($forma1); //Contar elementos
echo "<br>";
echo array_pop($forma1); //Eliminar el ultimo elemento
echo "<br>";
echo array_shift($forma1); //Eliminar el primer elemento
echo "<br>";
echo array_unshift($forma1,"Manzana"); //Agregar un elemento al inicio
echo "<br>";
echo array_push($forma1,"Pera"); //Agregar un elemento al final
echo "<br>";
//echo array_reverse($frutas); //Invertir el orden de los elementos
echo "<br>";
echo array_search("Uva",$frutas); //Buscar un elemento
echo "<br>";
echo in_array("Uva",$frutas); //Buscar un elemento
echo "<br>";
echo array_key_exists("nombre",$datos); //Buscar una clave
echo "<br>";
echo array_values($datos); //Obtener los valores de un arreglo
echo "<br>";
echo array_keys($datos); //Obtener las claves de un arreglo
echo "<br>";
//echo array_merge($frutas, $forma2); //Unir dos arreglos
echo "<br>";
echo array_splice($frutas, 1, 3); //Extraer una parte de un arreglo
echo "<br>";
echo array_sum([1,2,3,4,5]); //Sumar los elementos de un arreglo
echo "<br>";
echo array_rand($frutas); //Obtener un indice aleatorio
echo "<br>";
echo array_unique($frutas); //Eliminar elementos duplicados
echo "<br>";
echo array_chunk($frutas, 2); //Dividir un arreglo en partes
echo "<br>";