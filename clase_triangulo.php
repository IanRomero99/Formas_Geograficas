<?php

$lado1 = $_POST['lado1'];
$lado2 = $_POST['lado2'];


include_once("./figura_geometrica.php");
include_once("./perimetro.php");

// Clase nueva llamada Triangulo
class Triangulo extends FiguraGeometrica implements PerimetroM {
    public $lado2;

    function __construct($tipoFigura, $lado1, $lado2) { 
        parent::__construct($tipoFigura, $lado1);
        $this->lado2 = $lado2;
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    public function calcularPerimetro() {
        return $this->lado1 + $this->lado1 + $this->lado2;
    }

    public function calcularArea() {
        return 0.5 * $this->lado1 * $this->lado2;
    }
    // public function __destruct() {
    //     echo "Destruyendo el objeto";
    // }
}


$triangulo = new Triangulo("Triangulo", $lado1, $lado2);
echo "Figura: Triangulo";
echo "<br>";
echo "Lado 1 introducido: $lado1";
echo "<br>";
echo "Lado 2 introducido: $lado2";
echo "<br>";
echo "Área: " . $triangulo->calcularArea();
echo "<br>";
echo "Perímetro: " . $triangulo->calcularPerimetro();
echo "<br>";
?>
