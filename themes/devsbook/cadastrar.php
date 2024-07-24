<?php

use Source\Helpers\Geral;
$this->layout('_theme');
?>

<link rel="stylesheet" href="<?= Geral::theme('/assets/css/login.css'); ?>"/>

<section class="container main content">
    <form method="POST">
        <h1 class="titulo">Crie seu cadastro</h1>

        <input placeholder="Digite seu nome completo" class="input" type="text" name="name" />

        <input placeholder="Digite seu e-mail" class="input" type="email" name="email" />

        <input placeholder="Digite sua senha" class="input" type="password" name="password" />

        <input placeholder="Digite sua senha novamente" class="input" type="password" name="passwordConfirmation" />

        <input placeholder="Digite sua data de nascimento" class="input" type="text" name="birthData" />

        <input class="button link-entrar" type="submit" value="Fazer cadastro" />

        <div class="link-cadastro">
            <a href="<?= Geral::url('/'); ?>">Já tem conta? Entrar</a>
        </div>
    </form>
</section>