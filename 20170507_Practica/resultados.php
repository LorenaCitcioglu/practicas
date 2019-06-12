// EJERCICIO 1 //
// escribir el código en el archivo imprimir.php //
<?php

var_dump($_GET)
 ?>

 // copiar la url en el navegador:

 http://localhost/Practica 07-may-19/imprimir.php?nombre=montoto&email=montoto@digitalhouse.com //

//EJERCICIO 2 //
//A) Aparecen los datos que cargué en el formulario//
//Abrir en el navegador el archivo formulario.php (corresponde php), entrando acá:
http://localhost/Practica%2007-may-19/formulario.html //

//B) El código de imprimir.php queda así:
<?php

var_dump($_GET['nombre']='Lore')
 ?> //

 //C) Modifico el imprimir.php así:
 <?php

 foreach ($_GET as $dato) {
   echo $dato;
 }

  ?> //
// ir a formularios.php, cargar los datos y al hacer enviar, nos lleva a imprimir.php y pone los datos que estamos cargando.
Si quiero cargar otro dato,
//
//EJERICIO 3 //
// Modificar el archivo formulario.php en la linea de form:
    <form action="imprimir.php" method="post">

y modificar imprimir.php


//Ejercicio 4//
getAllHeaders()
Son los encabezados que envia el navegador, que vemos por el f12 y net.
Es ifnormación que se envía el cliente y el servidor mutuamente, que nosotros nos generamos.
Mas adelante veremos para qué sirve.

//EJERCICIO 5
var_dump ($_SERVER) // es muy parecido a lo que hay en getAllHeaders
aca vemos la REMOTE_ADDR que es la ip del navegante.
Tdoas las cosas que dicen HTTP_ son las que recibimos del cliente
Todas las cosas que son SERVER_ son las que recibimos del servidor
Es información del servidor.
Mas adelante veremos para qué sirve.

Un input type file, te permite subir un archivo. Hay que camibar en el formulario, agregarle "enctype: 'multipart/file-data'"

$_REQUEST tiene todo lo que viene del ususario , por get o por post.
