<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    try {

        require_once '../../config/database.php';
        require_once '../models/login_model.inc.php'; 
        require_once '../controllers/login_contr.inc.php'; 

        // ERRORS

        $errors = [];

        if( is_input_empty($email, $senha)){
            $errors["empty_input"] = "Deves preencher todos os campos!";
        }

        $result = get_Clientes($pdo, $email);

        if(is_email_wrong($result)){
            $errors["email_wrong1"] = "Endereço de email ou senha incorretos";
        }

        if(!is_email_wrong($result) && is_senha_wrong($senha, $result["senha"])){
            $errors["email_wrong"] = "Endereço de email ou senha incorretos";
        }
        
        require_once '../../config/config_session.php';

        if($errors){
            $_SESSION["errors_login"] = $errors;
            header('Location: ../../public/page-login.php?erro+login');
            die();
        }
        

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);
        
        $_SESSION["id_Clientes"] = $result["id"];
        $_SESSION["nome_Clientes"] = htmlspecialchars($result["nome"]);
        $_SESSION["tel_Clientes"] = htmlspecialchars($result["tel"]);
        $_SESSION["apelido_Clientes"] = htmlspecialchars($result["apelido"]);
        $_SESSION["email_Clientes"] = htmlspecialchars($result["email"]);

        $_SESSION["last_regeneration"] = time();

        if($result['usertype'] == 'user'){
            header("location: ../../public/ecobazar.php"); //caminho para pagina principal 
        }else if($result['usertype'] == 'admin'){
            header("location: ../../public/page-admin.php");//caminho para pagina do admin
        }else{
            header('Location: ../../public/page-login.php?erro+login+burro');
        }
        
        $pdo = null;
        $smtm = null;

        die();
    } catch (PDOException $e) {
        die("query faileid" . $e->getMessage());
    }

} else{
    header("location: ../../public/page-login.php?erro");
    die();
}