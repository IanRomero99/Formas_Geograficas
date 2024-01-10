<?php

// Incluimos la página de FiguraGeometrica ya que incluye el atributo abstracto del área
include_once("./figura_geometrica.php");

// Creación de la clase abstracta Area
abstract class Area {
    protected $area;

    abstract public function calcularArea();
}

?>
