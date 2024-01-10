<?php


include_once("./figura_geometrica.php");
include_once("./perimetro.php");


$lado1 = $_POST['lado1'];
$lado2 = $_POST['lado2'];
// Clase nueva llamada Rectangulo
class Rectangulo extends FiguraGeometrica implements PerimetroM {
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

    // public function __destruct() {
    //     echo "Destruyendo el objeto";
    // }

    // public function toString(){
    //     return "Tipo: " . $this->getTipoFigura() . ", Lado 1: " . $this->getLado1() . ", Lado 2: " . $this->getLado2();
    // }

    public function calcularPerimetro() {
        return 2 * ($this->lado1 + $this->lado2);
    }

    public function calcularArea() {
        return $this->lado1 * $this->lado2;
        }
}

$rectangulo = new Rectangulo("Rectangulo", $lado1, $lado2);
echo "Figura: Rectangulo";
echo "<br>";
echo "Lado 1 introducido: $lado1";
echo "<br>";
echo "Lado 2 introducido: $lado2";
echo "<br>";
echo "Área: " . $rectangulo->calcularArea();
echo "<br>";
echo "Perímetro: " . $rectangulo->calcularPerimetro();
echo "<br>";

?>
