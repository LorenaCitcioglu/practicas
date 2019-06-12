<?php

function triangulo($base, $altura) {
    $resultado = ($base * $altura) / 2;
   return $resultado;
}

function rectangulo($base, $altura) {
    $resultado = ($base*$altura);
   return $resultado;
}
function cuadrado($base) {
    $resultado = ($base*$base);
   return $resultado;
}
function circulo($radio) {
    $resultado = (pi()*$radio*$radio);
   return $resultado;
}

echo triangulo(2,4);
echo rectangulo(2,4);
echo cuadrado(4);
echo circulo(4);
?>
