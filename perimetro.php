<?php

// Creación de la interfaz del Perimetro, con su atributo publico del perimetro
interface PerimetroM {
    public $perimetro;
}

   function getPerimetro() {
        return $this->perimetro;
    }

    function setPerimetro() {
        $this->perimetro = $perimetro;
    }

    public function __construct($perimetro) {
        $this->perimetro = $perimetro;
    }
    
    public function __destruct() {
        echo "Destruyendo el objeto";
       }

?>