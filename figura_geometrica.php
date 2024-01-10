<?php
//  Genera una clase llamada FiguraGeometrica con dos atributos llamados tipoFigura y  lado1. Esta clase tendrá un método abstracto sin parámetros llamado área, que devolverá el área.
//  Genera los métodos getters y setters.
//  Genera el constructor con todos sus atributos  y el destructor.
//  Genera la interfaz PerimetroM, y añádele un método público llamado perímetro.
//  Todas las clases tendrán el constructor con todos sus atributos.
abstract class FiguraGeometrica {
    public $tipoFigura;
    public $lado1;
    
    abstract public function calcularArea();
    
    function getTipoFigura() {
        return $this->tipoFigura;
    }
    
    function getLado1() {
        return $this->lado1;
    }

    function setTipoFigura($tipoFigura) {
        $this->tipoFigura = $tipoFigura;
    }
    
    function setLado1($lado1) {
        $this->lado1 = $lado1;
    }

    public function __construct($tipoFigura, $lado1) {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }
    
    // public function __destruct() {
    //     echo "Destruyendo el objeto";
    // }
}

?>
