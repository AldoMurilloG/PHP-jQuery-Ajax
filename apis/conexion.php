<?php

    $localhost = 'localhost';
    $user = 'root';
    $password = '12345678';
    $db = 'isdm_paginacion_datatables';

    $connect = new mysqli($localhost, $user, $password, $db);

    if ($connect->connect_errno) {
        echo "Falló al conectar a MySQL: ($connect->connect_errno) $connect->connect_error";
    }

?>