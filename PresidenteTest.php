<?php
require_once 'Presidente.php';

$presidente1 = Presidente::obtenerPresidente('Juan Pérez');
$presidente1->gobernar();

$presidente2 = Presidente::obtenerPresidente('María López');
$presidente2->gobernar();
?>
