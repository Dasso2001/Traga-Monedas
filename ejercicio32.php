<?php 
$figuras = array("corazon", "diamante", "herradura", "campana", "limon");
$tirada = [];

for ($i = 0; $i < 3; $i++){ // bucle que realiza la tirada y elige aleatoriamente 3 
    $tirada[] = $figuras[array_rand($figuras)];
}

echo "Tirada: "; // muestra la tirada
foreach ($tirada as $figura){
    echo $figura ." ";
}

echo "<br>";

if(count(array_unique($tirada)) == 1){
    $resultado = "Felicitaciones, ha ganado 10 monedas"; // si tres figuras son iguales
}

else if (count(array_unique($tirada)) == 2){
    $resultado = "Bien, ha recuperado su moneda";  // si dos figuras son iguales
}

else {
    $resultado = "Lo siento, ha perdido";  // si son todas diferentes 
}

echo "$resultado"; // mostrar 
?>