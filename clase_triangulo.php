<?php

// Recoger los lados 
$lado1 = $_POST['lado1'];
$lado2 = $_POST['lado2'];

// Llamamos a los demas ficheros
include_once("./figura_geometrica.php");
include_once("./perimetro.php");

// Clase nueva llamada Triangulo que extiende la figuraGeometrica y implementa el PerimetroM
class Triangulo extends FiguraGeometrica implements PerimetroM {
    public $lado2;

 // Constructor de la clase que extiende otra clase (herencia)
function __construct($tipoFigura, $lado1, $lado2) { 
    // Llama al constructor de la clase padre con $tipoFigura y $lado1
    parent::__construct($tipoFigura, $lado1);
    
    // Inicializa la propiedad adicional $lado2 con el valor proporcionado
    $this->lado2 = $lado2;
}

// Método para obtener el valor del lado2
public function getLado2() {
    return $this->lado2;
}

// Método para establecer el valor del lado2
public function setLado2($lado2) {
    $this->lado2 = $lado2;
}

// Funcion para calcular el perimetro
public function calcularPerimetro() {
    // En este caso, el perímetro es la suma de todos los lados (lado1 + lado1 + lado2)
    return $this->lado1 + $this->lado1 + $this->lado2;
}

// Funcion para calcular el area
public function calcularArea() {
    // En este caso, el área es 0.5 * lado1 * lado2 (asumiendo que $lado1 y $lado2 son las dimensiones relevantes)
    return 0.5 * $this->lado1 * $this->lado2;
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
    <div class="card">
        <?php
         
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
    
        <a href="./index.php" id="boton_volver" type="button">Volver</a>
    </div>
</body>
</html>

