<?php
$nombre = 'Juan';
$numero = rand(0,1);
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
];
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
    <h2>Bienvenido <?= $nombre ?></h2>
    <h3>¿Es usted un ganador? <?= $numero == 0 ? 'NO' : 'SI' ?></h3>

    <h3>Algunos sitios interesantes:</h3>
    <ul>
      <?php foreach ($sites as $site): ?>
      <li>
        <a href="<?= $site['url'] ?>"><?= $site['name'] ?></a>
      </li>
    <?php endforeach ?>
    </ul>
  </body>
</html>
