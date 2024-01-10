<?php

$lado1 = $_POST['lado1'];

include_once("./figura_geometrica.php");
include_once("./perimetro.php");


class Circulo extends FiguraGeometrica implements PerimetroM {
    public function __construct($tipoFigura, $lado1) { 
        parent::__construct($tipoFigura, $lado1);
    }

    public function calcularPerimetro() {
        return 2 * pi() * $this->lado1;
    }

    public function calcularArea() {
    return pi() * pow($this->lado1, 2);
    }

    // public function __destruct() {
    //     echo "Destruyendo el objeto";
    // }
}
$circulo = new Circulo("Circulo", $lado1);
echo "Figura: Circulo";
echo "<br>";
echo "Lado introducido: $lado1";
echo "<br>";
echo "Área: " . $circulo->calcularArea();
echo "<br>";
echo "Perímetro: " . $circulo->calcularPerimetro();
echo "<br>";
?>
