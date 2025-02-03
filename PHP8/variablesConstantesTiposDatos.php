<?  
/* Imprimir en pantalla */
print "Hola Mundo"; // Solo se puede colocar una cadena
echo "Hola mundo","Hola mundo 2"; //Se pueden utilizar varias cadenas
echo "<br>";

/* Variables y Constantes*/
$name = "Eliel";
const escuela = "Eliel";                //global y en clases
define("direccion","Ingreso de datos");  //global


/* Tipos de datos */
$string = "Hola";  //Cadena
$string2 = "20"; 
$int = 22;         //Enteros
$float = 9.5;      //Decimales
$boolean = false;   //Boleano


echo gettype($string);   //Obtener el tipo de dato
$suma = $string2 + $float;      //Conversion de tipos
echo intval($suma);      //forzar conversion
echo $string . $string2;        //concatenar(Sumar)

echo "Hola $string2 $string2"; // Interpolación de variables
echo "Hola {$string2} Facilito"; // delimitación de cadenas
echo 'Hola $string2 $string2'; // Solo se imprime el texto - Interpolación no se hace con comillas simples

//Formas de trabajar strings
echo "Hola \"Facilito\"";   //usar comillas dobles dentro de comillas dobles   

//Crear un string con varias lineas utilizando sintaix heredoc
<<<Frase
    $string
    Facilito
    Frase;

//Crear un string con varias lineas utilizando sintaix nowdoc
<<<'Frase'
    $string
    Facilito
    Frase;

    //Extraer una parte de la cadena
$allname = "Eliel Oliveros Duque";
$lastName = substr($allname, 5,9);
$lastName2 = substr($allname, 5,-5);


/* Funciones de Cadena*/
echo strlen("Pinpong es un muñeco guapo y de carton"); //Longitud de la cadena 
echo "<br>";
echo strtoupper($allname); //Convertir a mayusculas
echo "<br>";
echo strtolower($allname); //Convertir a minusculas
echo "<br>";
echo strpos($allname,"Oliveros"); //Buscar una cadena
echo "<br>";
echo substr($allname, 6, ); //Extraer una parte de la cadena
echo "<br>";
echo str_replace("Oliveros","Facilito",$allname); //Reemplazar una cadena
echo "<br>";
echo trim($allname); //Eliminar espacios en blanco
echo "<br>";
echo str_repeat($allname, 3); //Repetir una cadena
echo "<br>";
echo str_shuffle($allname); //Desordenar una cadena
echo "<br>";
echo str_word_count($allname); //Contar palabras
echo "<br>";
echo strrev($allname); //Invertir una cadena
echo "<br>";

//Ejemplo uso de replace
$RFC = "91 57 1A EC C8 3A";
$buscar = " ";
$reemplazar = ":";
echo str_replace($buscar,$reemplazar,$RFC); //Reemplazar una cadena

//Ejemplo uso de sprintf
$anio = "3035";
$mes = "12";
$dia = "31";    
$formato = "%s-%s-%s";
echo sprintf($formato,$dia,$mes,$anio); //Formatear una cadena



