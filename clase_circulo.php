<?php

// Recogemos el lado1
$lado1 = $_POST['lado1'];

// Llamamos a los ficheros que nos haga falta
include_once("./figura_geometrica.php");
include_once("./perimetro.php");

// Creacion de la clase circulo que extiende de figura geometrica y que implemennta del perimetro, seguidamente recogemos los atributos necesarios
class Circulo extends FiguraGeometrica implements PerimetroM {
    public function __construct($tipoFigura, $lado1) { 
        parent::__construct($tipoFigura, $lado1);
    }
// Funcion para que calcule el perimetro
    public function calcularPerimetro() {
        return 2 * pi() * $this->lado1;
    }
// Funcion para calcular el area
    public function calcularArea() {
    return pi() * pow($this->lado1, 2);
    }

    // public function __destruct() {
    //     echo "Destruyendo el objeto";
    // }
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
    <!-- Mostrar por pantalla los resultados -->
    <div class="card">
        <?php
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
    
        <a href="./index.php" id="boton_volver" type="button">Volver</a>
    </div>
</body>
</html>