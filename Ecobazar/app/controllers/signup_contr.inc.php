<?php

declare(strict_types=1);

function is_input_empty(string $nome, string $apelido, string $email, string $senha, string $csenha)
{
    if(empty($nome) || empty($apelido) || empty($email) || empty($senha) || empty($csenha))
    {
        return true;

    } else{

        return false;
    }
}

function is_password_valid(string $senha, string $csenha)
{
    if( $senha !== $csenha)
    {
        return true;

    } else{

        return false;
    }
}

function is_password_bigger(string $senha)
{
    if(strlen($senha) < 8)
    {
        return true;

    } else{

        return false;
    }
}


function is_email_invalid(string $email)
{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        return true;

    } else{

        return false;
    }
}


function email_taken(object $pdo, string $email)
{
    if(get_email($pdo, $email))
    {
        return true;

    } else{

        return false;
    }
}


function create_Cliente(object $pdo, string $email, string $nome, string $apelido, string $tel, string $senha)
{
    set_user($pdo, $email, $nome, $apelido, $tel, $senha);
}