

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $persona = [
        "Nombre" => "Jon",
        "Apellido" => "Snow",
        "Edad" => 27,
        "Hobbies" => ["Netflix", "Fútbol", "Programar"],
      ];
      $persona["Edad"] = 25;
      $persona["Direccion"] = "Winterfell";
      $persona["Hobbies"][3]= "Hockey";
    ?>
    <?php
    $numero1 = 0;
    $numero2 = 0;

    if ($numero2 < $numero1) {
      echo "El número mayor es $numero1" . "<br>";
    } else echo "El número mayor es $numero2" . "<br>";
     ?>
     <?php
     $numero = rand(1, 5);
     if ($numero == 3) {
       echo $numero . "<br>";
     } else if ($numero == 5) {
       echo $numero . "<br>";
     }
      ?>
     <?php
     $numero = rand(1, 5);
     if ($numero != 3) {
       echo "El numero NO es 3" . "<br>";
     } else echo $numero . "<br>"
      ?>
  
  </body>
</html>
