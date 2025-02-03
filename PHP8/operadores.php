<?php //Categoria de operadores

//OPERADORES DE COMPARACION
//Operador igual ==
$raza = "Pitbull";
var_dump($raza == "Pitbull"); //var_dump muestra el tipo de dato y el valor

//Operador identico ===
$edad = "22";
var_dump($edad === 22);

//Operador diferente !=
var_dump($raza != "Pitbull");

//Operador diferente <>
var_dump($raza <> "Pitbull");

//Operador no identico !==
var_dump($edad !== 22);

//Operador mayor que >
var_dump($edad > 22);

//Operador mayor o igual que >=
var_dump($edad >= 22);

//Operador menor que <
var_dump($edad < 22);

//Operador menor o igual que <=
var_dump($edad <= 22);

//Operador de nave espacial <=>
/* devuelve 
-1 = El valor es menor 
 0 = Ambos valores sean iguales
 1 = El valor es mayor
 1) */ 
var_dump($edad <=> 22);



//OPERADORES ARITMETICOS
//Operador de identidad + Unario
//Operador de negacion - Unario
$numero = +10;
echo $numero;
echo -$numero;

//Operador de adición +
$numero1 = 10;  
$numero2 = 20;  
echo $numero1 + $numero2;   

//Operador de sustracción -
echo $numero1 - $numero2;   

//Operador de multiplicación *
echo $numero1 * $numero2;

//Operador de división /    
echo $numero1 / $numero2;

//Operador de modulo %
echo $numero1 % $numero2; //Residuo de la division

//Operador de exponenciación **
echo $numero1 ** $numero2; //Potencia 

//Operadores de asignacion =
$numero1 = 10; //Asignar un valor a una variable

//Operadores de asignacion por referencia =&
$numero2 = &$numero1; //Asignar una referencia a una variable

//Operadores de asignacion para concatenar .=
$salu = "Codigo ";
$salu .= "Facilito"; //Concatenar una cadena



//OPERADORES LOGICOS
//operador and &&
$edad = 15;
$esMayor = $edad>=22;

$regalo = "Si";
$traeRegalo = $regalo == "Si";
var_dump($esMayor && $traeRegalo);
var_dump($esMayor and $traeRegalo);

//operador or ||
var_dump($esMayor || $traeRegalo);
var_dump($esMayor or $traeRegalo);

//operador xor
var_dump($esMayor xor $traeRegalo); //Solo uno de los dos puede ser verdadero



//OPERADORES INCREMENTO Y DECREMENTO - UNARIOS
//Operador de preincremento
$numero = 10;
echo ++$numero; //Incrementa y luego imprime

//Operador de pos-incremento
$numero = 10;
$numero++;
echo $numero; //Imprime y luego incrementa

//Operador de pre-decremento
$numero = 10;
echo --$numero; //Decrementa y luego imprime

//Operador de pos-decremento
$numero = 10;
$numero--;
echo $numero; //Imprime y luego decrementa 



//OPERADOR TERNARIO
// Operando ? Expresion1 : Expresion2
$promedio  = 7;
$calificacion = ($promedio >= 7) ? "Aprobado" : "Reprobado";
echo $calificacion;

//Operador elvis ?:
$promedio = null;
$aprobo = ($promedio) ?: 5; //Si la variable es verdadera se asigna el valor de la variable, si no se asigna el valor de la derecha

//Operador de fusion de null ??
$promedio;
$aprobo = ($promedio) ?? 5; //Si la variable es nula se asigna el valor de la derecha


//JERARQUIA DE OPERADORES
//1. ()
//2. ! ++ --
//3. * / %
//4. + -
//5. < <= > >=
//6. == != === !==
//7. &&
//8. ||
//9. ?:
//10. = += -= *= /= %= .=
//11. and
//12. xor
//13. or


?>