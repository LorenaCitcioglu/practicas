<?php

session_start();

if(isset($_REQUEST["action"]))
{
    if ($_REQUEST["action"] == "restart'){
        $_SESSION['contador'] = 0;
    } else if ($_REQUEST['action'] == 'inc') {
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
<form action='modificar.php' method='post'>
<button name="action" value="restart">Reiniciar</button>
<button name="action" value="inc">Incrementar</button>
</form>
</body>
</html>
