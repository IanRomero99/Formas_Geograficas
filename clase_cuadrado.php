<?php

include_once("./figura_geometrica.php");
include_once("./perimetro.php");

// Verificar si 'lado1' está presente en $_POST y no está vacío
if(isset($_POST['lado1']) && !empty($_POST['lado1'])) {
    $lado1 = $_POST['lado1'];

    class Cuadrado extends FiguraGeometrica implements PerimetroM {
        public function __construct($tipoFigura, $lado1) { 
            parent::__construct($tipoFigura, $lado1);
        }

        public function calcularPerimetro() {
            return 4 * $this->lado1;
        }

        public function calcularArea() {
            return $this->lado1 * $this->lado1;
        } 
    }

    $cuadrado = new Cuadrado("Cuadrado",$lado1);
    echo "Figura: Cuadrado";
    echo "<br>";
    echo "Lado introducido: $lado1";
    echo "<br>";
    echo "Área: " . $cuadrado->calcularArea();
    echo "<br>";
    echo "Perímetro: " . $cuadrado->calcularPerimetro();
    echo "<br>";

} else {
    echo "Por favor, proporciona un valor para el lado1.";
}
?>
