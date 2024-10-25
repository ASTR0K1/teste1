<?php

declare(strict_types=1);


function is_input_empty(string $email, string $senha)
{
    if( empty($email) || empty($senha)){
        return true;
    }else{
        return false;
    }
}


function is_email_wrong( bool|array $result )
{
    if(!$result){
        return true;
    }else{
        return false;
    }
}


function is_senha_wrong(string $senha, string $senhaHashed)
{
    if(!password_verify($senha, $senhaHashed)){
        return true;
    }else{
        return false;
    }
}

