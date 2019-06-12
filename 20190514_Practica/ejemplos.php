<?php
session_start ();

$_SESSION['id']=123;

if (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'es') {
    $txt = file_get_contents('diccionario-es.txt');
} else {
    $txt = file_get_contents('diccionario-en.txt'); 
} /* esto sirve para entender la preferencia del ususario y según esto qué información le mostramos. */
?>
/*-----------------------------------------------------------------------------------------------------------------*/
<?php
session_start ();

$_SESSION['id']=123;

if (isset($_GET('lang'))) {
    setcookie(¿lang¿, $_GET['lang']);
    header('location: cookie.php');
}

$_COOKIE['lang']='es':

if (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'es') {
    $txt = file_get_contents('es.json');/* cargar la traduccion en español. */

} else {
    $txt = file_get_contents('en.json'); 
}
/* esto sirve para entender la preferencia del ususario y según esto qué información le mostramos. */
$txt=json_decode($txe, true);

?>
<html>
<a href='?lang=es'>Español</a>
<a href='?lang=en'>Inglés</a>
</html>
/* esto sirve entrar según el idioma, qué página abrir. */
/*-----------------------------------------------------------------------------------------------------------------*/

/* Ejercicio 1 */

<?php

session_start();

if(isset($_GET["action"]))
{
    if ($_GET["action"] == "restart'){
        $_SESSION['contador'] = 0;
    } else if ($_GET['action'] == 'inc') {
        $_SESSION['contador']++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="?action=restart">Reiniciar</a> /* el ?action=restart te indica que de esta página, busque el Query String correspondiente */
<a href="?action=inc">Incrementar</a> /* el ?action=restart te indica que de esta página, busque el Query String correspondiente */
</body>
</html>
----------------------------------------------------------------------------------------------------------------------------------------
/*otra forma es hacer una función de redireccionar*/
<?php

session_start();
function redirect($url) {
    header('location: ' . $url);
}


if(isset($_REQUEST["action"]))
{
    if ($_REQUEST["action"] == "restart'){
        $_SESSION['contador'] = 0;
    } else if ($_REQUEST['action'] == 'inc') {
        $_SESSION['contador']++;
    } else if ($_REQUEST["action] == "logout") {
        session_destroy();
        redirect("login.php");
    }
}
?>

---------------------------------------------------------------------------------------------------------------------------------------------