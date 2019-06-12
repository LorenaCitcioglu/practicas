<?php 

if (!empty($_POST)){

  $usuario = [
    'email' => $_POST['email'],
    'password' => password_hash($password, PASSWORD_DEFAULT)
  ];
  $json = json_encode($usuario);
  
  if (file_exists('usuarios.json')) {             // esto se agrego para el 2do ejercicio ///
    $data = file_get_contents('usuarios.json');

    $decoded =json_decode ($data);
    $decoded[] = $usuario;                        // hasta aca 2do eejercicio //

  }
  file_put_contents('usuarios.json', $json);

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class='' action='register.php' method='post'>
    <div>
          <input type='text' placeholder='Email' name='email' >
    </div>
    <div>
      <input type='password' name='password' value=''>
    </div>
      <button>"Enviar"</button>
    </form>
  </body>
</html>
