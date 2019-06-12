<?php

class bazar
{
  private $articulos = []; //aca defino la variable dentro de la clase//
  private $empleados = [];

  public function agregarArticulo($articulos)
  {
    $this->$articulos[] = $articulo;
  }

  public function setEmpleados()
  {

  }
}

$bazar = new Bazar; //asi cobra vida lo que está dentro de la clase//
?>

// generalmente se va a manejar un php por clase//
