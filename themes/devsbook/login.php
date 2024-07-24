<?php

use Source\Helpers\Geral;
$this->layout('_theme'); 
?>

<link rel="stylesheet" href="<?= Geral::theme('/assets/css/login.css'); ?>"/>

<section class="container main content">
    <form method="POST">
        <h1 class="titulo">Login</h1>

        <input placeholder="Digite seu e-mail" class="input" type="email" name="email" />

        <input placeholder="Digite sua senha" class="input" type="password" name="password" />

        <input class="button link-entrar" type="submit" value="Acessar o sistema" />

        <div class="link-cadastro">
            <a href="<?= Geral::url('/cadastrar'); ?>">Ainda não tem conta? Cadastre-se</a>
        </div>
    </form>
</section>