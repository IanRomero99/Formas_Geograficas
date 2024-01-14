<?php


include_once("./figura_geometrica.php");
include_once("./perimetro.php");


$lado1 = $_POST['lado1'];
$lado2 = $_POST['lado2'];
// Clase nueva llamada Rectangulo
class Rectangulo extends FiguraGeometrica implements PerimetroM {
    public $lado2;
// Construimos y recogemos los lados de su clase padre
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


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ESTILOS -->
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-size: 45px;
        }

        .card {
            padding: 200px;
            border: 1px solid #ccc;
            border-radius: 100px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-family: 'Merriweather';
            padding-top: 10vh;
        }

        #boton_volver {
            width: 640px;
            height: 60px;
            background-color: #000;
            color: #fff;
            display: block;
            overflow: hidden;
            transform: translate3d(0,0,0);
            margin: auto;
            cursor: pointer;
            font-size: 45px; 
            border: none;
            border-radius: 5px;
            text-decoration: none; 
            text-align: center; 
            display: block; 
        }
    </style>
</head>
<body>
    <div class="card">
        <?php
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
    
        <a href="./index.php" id="boton_volver" type="button">Volver</a>
    </div>
</body>
</html>
