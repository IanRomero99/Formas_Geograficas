<?php

// Incluimos la página de figura geometrica ya que incluye el atributo abstracto del area 
include_once("./figura_geometrica.php");

// Creación de la clase abstracta de area
abstract class Area {
    abstract protected $area;
}


?>