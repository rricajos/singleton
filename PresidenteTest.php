<?php
require_once 'Presidente.php';

// PROS: Singleton siempre devuelve la misma instancia
echo "✅ PRO: Singleton asegura una única instancia:\n";

$presidente1 = Presidente::obtenerPresidente('Juan Pérez');
$presidente2 = Presidente::obtenerPresidente('María López');

if ($presidente1 === $presidente2) {

    echo "Ambos presidentes son la MISMA instancia.\n";
    $presidente1->gobernar();
    
} else {
    echo "ERROR: Instancias distintas.\n";
}

echo "\n";

// CONTRAS: Dificultad para cambiar o testear la instancia
echo "❌ CONTRA: Dificultad para cambiar instancia una vez creada:\n";

echo "Intentando cambiar presidente a María López...\n";
$presidenteNuevo = Presidente::obtenerPresidente('María López');

if ($presidenteNuevo->nombre === 'María López') {
    echo "El presidente cambió correctamente a María López.\n";
} else {
    echo "No se puede cambiar la instancia existente. Sigue siendo: " . $presidenteNuevo->nombre . "\n";
}

echo "\n";

// CONTRAS: Violación de Responsabilidad Única (demostración conceptual)
echo "❌ CONTRA: Violación de responsabilidad única:\n";
echo "La clase Presidente tiene múltiples responsabilidades:\n";
echo "- Garantizar única instancia\n";
echo "- Controlar acceso global\n";
echo "- Ejecutar lógica de negocio (gobernar)\n";
echo "Esto puede complicar futuras modificaciones.\n";
?>
