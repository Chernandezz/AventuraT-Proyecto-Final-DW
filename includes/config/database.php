<?php

function conectarDB(): mysqli
{
    $db = mysqli_connect('us-cdbr-east-06.cleardb.net', 'b061e83da8b7cc', 'd8a97d8b', 'heroku_bd417071f19136c');

    if (!$db) {
        echo "Error, no se pudo conectar a la BD";
        exit;
    }

    return $db;
}
/*
mysql://b061e83da8b7cc:d8a97d8b@us-cdbr-east-06.cleardb.net/heroku_bd417071f19136c?reconnect=true


Username: b061e83da8b7cc
Password: d8a97d8b
Server: us-cdbr-east-06.cleardb.net
Port: 3306
Database: heroku_bd417071f19136c
*/