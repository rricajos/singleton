<?php
// Archivo Presidente.php
class Presidente {
    private static $instancia;
    public $nombre;

    private function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public static function obtenerPresidente($nombre = 'Presidente Actual') {
        if (!isset(self::$instancia)) {
            self::$instancia = new Presidente($nombre);
        }
        return self::$instancia;
    }

    public function gobernar() {
        echo $this->nombre . " está gobernando el país.\n";
    }
}
?>
