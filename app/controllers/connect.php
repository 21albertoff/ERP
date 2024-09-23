<?php

include_once __DIR__ . '/../config/config.php';

function connect($db_server, $db_name, $db_user, $db_password) {
    try {
        $dsn = "sqlsrv:server=$db_server;Database=$db_name;TrustServerCertificate=true";
        
        $conn = new PDO($dsn, $db_user, $db_password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
    } catch (PDOException $e) {
        die($e);
    }
}

return connect($db_server, $db_name, $db_user, $db_password);