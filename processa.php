<?php
ob_start();

    require_once "conexao.php";

    $nome = trim($_POST["nome"] ?? "");
    $email = trim($_POST["email"] ?? "");

    if(empty($nome) || empty($email)){
        die("Preencha todos os campos.");
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("E-mail inválido");
    }

    $sql = "INSERT INTO leads (nome, email) VALUES (?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nome, $email);

    if($stmt->execute()){
    header("Location: index.php?sucesso=1");
        exit;
    } else {
        echo "Erro ao cadastrar";
    }

    $stmt->close();
    $conn->close();