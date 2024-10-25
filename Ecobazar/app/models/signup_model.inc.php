<?php

declare(strict_types=1);

function get_email(object $pdo, string $email)
{
    $query = "SELECT nome FROM Clientes where email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}

function create_Clientes(object $pdo, string $email, string $nome, string $apelido, string $tel, string $senha)
{
    $query = "INSERT INTO Clientes (nome, apelido, tel, email, senha) VALUES (:nome, :apelido, :tel, :email, :senha );";
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];

    $senhaHashed = password_hash($senha, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":apelido", $apelido);
    $stmt->bindParam(":tel", $tel);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":senha", $senhaHashed);
    $stmt->execute();
}