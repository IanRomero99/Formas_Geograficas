<?php

// Creacion de la clase abstracta llamada Figura Geometrica
abstract class FiguraGeometrica {
    public $tipoFigura;
    public $lado1;
    // con la funcion calcular area 
    abstract public function calcularArea();
    
   // Método para obtener el tipo de figura
function getTipoFigura() {
    return $this->tipoFigura;
}

// Método para obtener el valor del lado1
function getLado1() {
    return $this->lado1;
}

// Método para establecer el tipo de figura
function setTipoFigura($tipoFigura) {
    $this->tipoFigura = $tipoFigura;
}

// Método para establecer el valor del lado1
function setLado1($lado1) {
    $this->lado1 = $lado1;
}

// Constructor de la clase
public function __construct($tipoFigura, $lado1) {
    // Inicializa las propiedades con los valores proporcionados al crear un objeto
    $this->tipoFigura = $tipoFigura;
    $this->lado1 = $lado1;
}

    // public function __destruct() {
    //     echo "Destruyendo el objeto";
    // }
}

?>
