//Bucles
//Ejercicio 1
<?php
  $numero = 20;
  $resultado = 0;
  for ($i=0 ; $i < $numero ; $i++) {
      $resultado = $i*2;
      echo $resultado . '<br>';
  }
 ?>

//Ejercicio 2
 <?php
   $numero = 100;
   $resultado = 0;
   while ($numero >= 85) {
     $resultado = $numero;
     $numero--;
     echo $resultado . '<br>';
   }
  ?>

//Ejercicio 3
  <?php
  $resultado = [];
  $contador = [1, 2, 3, 4, 5];
  foreach ($contador as $valor) {
    $resultado = [$valor*2];
    echo "<pre>";
    var_dump ($resultado);
    echo "</pre>";
  }
  ?>

//Ejercicio 4
  <?php
  $tiros = 0;
  $cantidadDeVeces=0;

  while ($cantidadDeVeces <= 5) {
    $numero = rand(0,1);
    if ($numero == 1) {
      $cantidadDeVeces = 1 + $cantidadDeVeces;
    }
    $tiros++;
    }  echo $tiros ;

   ?>

//Ejercicio 5a
   <?php
   $nombres = ['nombre1', 'nombre2', 'nombre3', 'nombre4', 'nombre5',];

   for ($i=0 ; $i < count($nombres) ; $i++) {
     echo $nombres[$i] . '<br>';
   }
    ?>
//Ejercicio 5b
    <?php
    $nombres = ['nombre1', 'nombre2', 'nombre3', 'nombre4', 'nombre5',];

    $i=0;
    while ($i < count($nombres)) {
      echo $nombres[$i] . '<br>';
      $i++;
    }
     ?>
//Ejercicio 5c
     <?php
     $nombres = ['nombre1', 'nombre2', 'nombre3', 'nombre4', 'nombre5',];
     $i = 0;
     do {
       echo $nombres[$i] . '<br>';
       $i++;
     } while ($i < count($nombres));

      ?>
//Ejercicio 5d
      <?php
      $nombres = ['nombre1', 'nombre2','nombre3','nombre4','nombre5', ];

      foreach ($nombres as $nombre) {
       echo $nombre . '<br>';
      }
       ?>

//Ejercicio 6
       <?php
       $numeros = [];

       for ($i=0 ; $i < 10 ; $i++) {
         $numeros[]=rand(0,10);
         if ($numeros[$i] == 5) {
           echo "Se encontró un 5!";
           break;
         }
       }echo "<pre>";
       var_dump ($numeros);
       echo "</pre>";
        ?>

//Ejercicio 7
        <?php
        $numeros = [];
        $numerosPares=0;
        for ($i=0 ; $i < 10 ; $i++) {
          $numeros[]=rand(0,100);
          if ($numeros[$i] % 2) {
            $numerosPares = $numerosPares + 1;
          }
        }echo "<pre>";
        var_dump($numeros);
        echo "</pre>";
        echo $numerosPares;
        ?>

//Ejercicio 8
         ?>
         <?php
         $mascota=[
           "animal" =>"perro",
           "edad"=>5,
           "altura"=>0.60,
           "nombre"=>"Sonic",
         ];

         foreach ($mascota as $indice => $valor) {
           echo "$valor" . "<br>";
          }
          ?>

//Ejercicio 9
          <?php
          $ceu = array( "Italia"=>"Roma", "Luxembourg"=>"Luxembourg", "Bélgica"=>
          "Bruselas", "Dinamarca"=>"Copenhagen", "Finlandia"=>"Helsinki", "Francia" =>
          "Paris", "Slovakia"=>"Bratislava", "Eslovenia"=>"Ljubljana", "Alemania" => "Berlin",
          "Grecia" => "Athenas", "Irlanda"=>"Dublin", "Holanda"=>"Amsterdam",
          "Portugal"=>"Lisbon", "España"=>"Madrid", "Suecia"=>"Stockholm", "Reino
          Unido"=>"London", "Chipre"=>"Nicosia", "Lithuania"=>"Vilnius", "Republica
          Checa"=>"Prague", "Estonia"=>"Tallin", "Hungría"=>"Budapest", "Latvia"=>"Riga",
          "Malta"=>"Valletta", "Austria" => "Vienna", "Polonia"=>"Warsaw");

          foreach ($ceu as $pais => $capital) {
            echo "$capital $pais" . "<br>";
           }
           ?>

//Ejercicio 10

           <?php
           $ceu = [
           "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
           "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
           "Colombia" => ["Cartagena", "Bogota", "Barranquilla"],
           "Francia" => ["Paris", "Nantes", "Lyon"],
           "Italia" => ["Roma", "Milan", "Venecia"],
           "Alemania" => ["Munich", "Berlin", "Frankfurt"]
           ];

           foreach ($ceu as $pais => $ciudades) {
             echo "Las ciudades de $pais son:<br>";
             foreach ($ciudades as $ciudad) {
               echo "* $ciudad<br>";
             }
           }
           ?>

//Ejercicio 15

            <?php
            $ceu = [
            "Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé", "esAmericano"=>true],
            "Brasil" => ["Brasilia", "Rio de Janeiro", "Sao Pablo", "esAmericano"=>true],
            "Colombia" => ["Cartagena", "Bogota", "Barranquilla", "esAmericano"=>true],
            "Francia" => ["Paris", "Nantes", "Lyon", "esAmericano"=>false],
            "Italia" => ["Roma", "Milan", "Venecia", "esAmericano"=>false],
            "Alemania" => ["Munich", "Berlin", "Frankfurt", "esAmericano"=>false]
              ];


            foreach ($ceu as $pais => $ciudades) {
              if ($ciudades["esAmericano"]) {
                echo "Las ciudades de $pais son:<br>";
                for ($i=0; $i<3; $i++) {
                  echo "* $ciudades[$i]<br>";
                }
              }
            }

            ?>

// Ejercicio Embedding 1a
<?php
$nombre = 'Juan'; /* 1a */
$numero = rand(0,1); /* 1b */
$sites = [
  [
    'url' => 'https://google.com',
    'name' => 'Google',
  ],
  [
    'url' => 'https://facebook.com',
    'name' => 'Facebook',
  ],
  [
    'url' => 'https://twitter.com',
    'name' => 'Twitter',
  ],
]; /* 1c */
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido <?= $nombre ?></h2> /* 1a */
    <h3>¿Es usted un ganador? <?= $numero == 0 ? 'NO' : 'SI' ?></h3> /* 1b */

    <h3>Algunos sitios interesantes:</h3>
    <ul>
      <?php foreach ($sites as $site): ?> /* 1c */
      <li>
        <a href="<?= $site['url'] ?>"><?= $site['name'] ?></a> /* 1c */
      </li>
    <?php endforeach ?> /* 1c */
    </ul>
  </body>
</html>
