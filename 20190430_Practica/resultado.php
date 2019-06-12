<?php

function mayor($a, $b, $c) {
  if ($a>$b && $a >$c) {
    return $a;
  } elseif ($b>$a && $b>$c) {
    return $b;
  }
  return $c;
}

echo mayor (1, 4, 3);
?>
<?php

function tabla($base, $limite) {
  $resultado = [];
  for ($i=$base; $i<$limite; $i++){
    $resultado[] = $i;
  } return $resultado;
}
?>

<?php

function mayor($a, $b, $c=100) {
  if ($a>$b && $a >$c) {
    return $a;
  } elseif ($b>$a && $b>$c) {
    return $b;
  }
  return $c;
}

echo mayor (150, 4);
?>

<?php

function tabla($base, $limite = 100) {
  $resultado = [];
  for ($i=$base; $i<$limite; $i++){
    $resultado[] = $i;
  } return $resultado;
}
var_dump(tabla(50));
?>

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
