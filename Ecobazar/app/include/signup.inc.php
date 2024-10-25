<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = $_POST["nome"];
    $apelido = $_POST["apelido"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $csenha = $_POST["csenha"];

    try {

        require_once '../../config/database.php';
        require_once '../models/signup_model.inc.php'; 
        require_once '../controllers/signup_contr.inc.php'; 

        // ERROS

        $errors = [];

        if( is_input_empty($nome, $apelido, $email, $senha, $csenha)){
            $errors["empty_input"] = "Deve preencher todos os campos!";
        }
        if(email_taken($pdo, $email)){
            $errors["email_taken"] = "Conta já registrada!";
        }
        if(is_password_bigger($senha)){
            $errors["pass_pequena"] = "Senha deve conter 8 ou mais letras";
        }
        if(is_password_valid($senha, $csenha)){
            $errors["pass_invalid"] = "Senhas não são iguais!!!";
        }
        

        require_once '../../config/config_session.php';

        if($errors){
            $_SESSION["errors_signup"] = $errors;

            $signupData = [
                "nome" => $nome,
                "apelido" => $apelido,
                "email" => $email,
                "tel" => $tel
            ];

            $_SESSION["signup_data"] = $signupData;

            header('Location: ../../public/page-login.php?ERRO');
            die();
        }

        create_Clientes($pdo, $email, $nome, $apelido, $tel, $senha);

        header("location: ../../public/page-login.php?Login+Sucesso");

        $pdo = null;
        $stmt = null;
        die();
        
    } catch (PDOException $e) {
        die("query faileid" . $e->getMessage());
    }

}else{
    header("location: ../../public/page-login.php?erro0");
    die();
}