<?php
echo 'Hola mundo!!!';

nombre;
$nombre=true   //No se hace necesario definir el tipo de variable
$nombre=12.5 //No es recomendable hacer esto

$nombre =  null;// Asi se definen variables correctamente en php*
$nombre = 'Pepe'; //string
$apellido = "Gomez";//tambieen se pueden crear variables con comillas dobles 

echo "\n" . $nombre .' ' . $apellido . "\n";//para concatenr en con un punto 
echo "\n $nombre $apellido \n";//Forma de concatenar mas rapido, usando comillas dobles 
echo '\n $nombre $apellido \n';//

$estado = true; //false 
$edad = 30; // int 
$promedio = 32.25; // float, doble o decimal

$numeros = array(1,2,3,4,5,6,7,8,9,10);
$numeros = [1,2,3,4,5,6,7,8,9,10];

/**
 * If y swich
 */
if ($categoria ==1){
    //codigo
}
else if ($categoria==3){
    //codigo
}else {
    //codigo
}
switch($categoria){
    case 1:
        //codigo
    case 2:
        //codigo
    case 3:
        //codigo
    case 4:
        //codigo
        break;
}
/**
 * ciclos
 */
$numeros = [1,2,3,4,5,6,7,8,9,10];
for($i=0; $i<count($numeros); $i++){
    $num = $numeros [$i];
    if(($num%2)==0){
        echo "$num es par\n";
    }else {
        echo "$num es impar\n";
    }

}
 echo "\nwhile\n";
$i=0;

while($i< count ($numeros)){
    $num = $numeros [$i];
    if(($num%2)==0){
        echo "$num es par\n";
    }else {
        echo "$num es impar\n";
    }
}
$i=0;
echo "\ndo while\n";
do{
    $num = $numeros [$i];
    if(($num%2)==0){
        echo "$num es par\n";
    }else {
        echo "$num es impar\n";
    }
    $i++;
}while($i< count ($numeros));

foreach($numeros as $pos =>$valor){
    if(($valor%2) == 0){
        echo "$pos: $valor es par\n";
        break; //corta el ciclo 
    }else {
        continue;//se salta la logica de un ciclo
        echo "$pos: $valor es impar\n";
    }
}
function saludar ($nombre,$apellido="Perez"){
    echo "\n Hola $nombre $apellido";
}
saludar ("Juan","Gomez");
saludar ("Ana");

function saludar2 ($nombre,$apellido="Perez"){
    return "\n Hola $nombre $apellido";
}
echo saludar2 ("Pedro","A");
echo saludar2 ("Pepe");
$nombreCompleto = "";
$nombre_completo = "";

echo "\n ". (1 == '1' ? 'true';'false');
echo "\n ". (1 === '1' ? 'true';'false');

