<?php

function conectarDB() : mysqli {
    $db = NEW mysqli('localhost', 'root', 'Keyboardjb', 'bienesraices_crud');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
   }

   return $db;
}