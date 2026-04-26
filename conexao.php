<?php

    $host = "sql309.infinityfree.com";
    $user = "if0_41761243";
    $password = "pagelanding4565";
    $database = "if0_41761243_next_agency";

    $conn = new mysqli($host, $user, $password, $database);

    if($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    $conn->set_charset("utf8");