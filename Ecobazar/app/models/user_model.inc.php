<?php

declare(strict_types=1);

function ver_Clientes(object $pdo)
{
    $query = "SELECT nome FROM Clientes;";
    $result = mysqli_query($pdo, $query);

    return $result;
}