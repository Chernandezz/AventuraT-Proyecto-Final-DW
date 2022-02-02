<?php

function conectarDB(): mysqli
{
    $db = mysqli_connect('localhost', 'root', '', 'aventurat');

    if (!$db) {
        echo "Error, no se pudo conectar a la BD";
        exit;
    }

    return $db;
}
