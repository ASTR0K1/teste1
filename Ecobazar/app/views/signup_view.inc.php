<?php

declare(strict_types=1);


function signup_inputs()
{

    if(isset($_SESSION["signup_data"]["nome"]))
    {
        echo '<div class="infield">
        <input type="text" name="nome" placeholder="Nome" value="'. $_SESSION["signup_data"]["nome"] .'" />
        <label></label>
        </div>';
    }else
    {
        echo '<div class="infield">
        <input type="text" name="nome" placeholder="Nome" />
        <label></label>
        </div>';
    }

    if(isset($_SESSION["signup_data"]["apelido"]))
    {
        echo '<div class="infield">
        <input type="text" name="apelido" placeholder="apelido" value="'. $_SESSION["signup_data"]["apelido"] .'"/>
        <label></label>
        </div>';
    }else
    {
        echo '<div class="infield">
        <input type="text" name="apelido" placeholder="apelido" />
        <label></label>
        </div>';
    }


    if(isset($_SESSION["signup_data"]["tel"]))
    {
        echo '<div class="infield">
        <input type="text" name="tel" placeholder="tel" value="'. $_SESSION["signup_data"]["tel"] .'"/>
        <label></label>
        </div>';
    }else
    {
        echo '<div class="infield">
        <input type="text" name="tel" placeholder="tel" />
        <label></label>
        </div>';
    }


    if(isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_taken"]) && !isset($_SESSION["errors_signup"]["email_invalid"]))
    {
        echo '<div class="infield">
        <input type="email" placeholder="Email" name="email" value="'. $_SESSION["signup_data"]["email"] .'"/>
        <label></label>
        </div>';
    }else
    {
        echo '<div class="infield">
        <input type="email" placeholder="Email" name="email"/>
        <label></label>
        </div>';
    }

    echo '<div class="infield">
    <input type="password" name="senha" placeholder="Senha" />
    <label></label>
    </div>';

    echo '<div class="infield">
    <input type="password" name="csenha" placeholder="Repetir Senha" />
    <label></label>
    </div>';
}



function check_signup_errors()
{
    if(isset($_SESSION["errors_signup"]))
    {
        $errors = $_SESSION["errors_signup"];

        foreach($errors as $error)
        {
            echo '<p>' . $error . '</p>';
        }

        unset($_SESSION["errors_signup"]);
    } else if(isset($_GET["bemCerto"]) && $_GET["bemCerto"] === "certo")
    {

    }
}