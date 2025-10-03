<?php 
/*
1. Utilice una estructura condicional if-else para verificar si un número es positivo, negativo o cero.
2. Utilice un bucle for para imprimir los números del 1 al 10.
3. Utilice un bucle while que sume los números del 1 al 100 y muestre el resultado.
4. Utilice switch para mostrar el día de la semana basado en un número (1-7).
5. Cree un array de nombres y use foreach para imprimir cada nombre.
*/


//1

$numero=0;

if($numero>0){
    echo "El numero $numero es positivo";

}else if($numero<0){
    echo "El numero $numero es negativo";
}else{
    echo "Como el numero es $numero no es ni positivo ni negativo";
}

echo "</br></br>";
echo "</br></br>";
//2

for($i=0;$i<=10;$i++){
    echo "$i ";
}

echo "</br></br>";
echo "</br></br>";
//3

$a=1;
$suma=0;
while($a<=100){
    $suma=$suma+$a;
    $a++;
}
echo " El resultado es: $suma";

echo "</br></br>";
echo "</br></br>";
//4

$fecha=6;
switch($fecha){
    case 1:
        echo "El día es Lunes";
        break;
    case 2:
        echo "El día es Martes";
        break;
    case 3:
        echo "El día es Miércoles";
        break;
    case 4:
        echo "El día es Jueves";
        break;
    case 5:
        echo "El día es Viernes";
        break;
    case 6:
        echo "El día es Sabado";
        break;
    case 7:
        echo "El día es Domingo";
        break;
    default:
        echo "No es ningún día"; 
        break;

}

echo "</br></br>";
echo "</br></br>";
//5

$nombres=["Carlos","Curro","Paco","Pablo"];
foreach ($nombres as $nombre) {
    echo "$nombre "; 
}
?>