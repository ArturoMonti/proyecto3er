<?php
if($argc != 2) {
    echo "Uso: php hola.php [nombre].\n";
    exit(1);
}

$nombre = $argv[1];

echo "Hola, $nombre\n";
