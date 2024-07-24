<?php
use Source\Helpers\Geral;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Devsbook</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <link rel="stylesheet" href="<?= Geral::theme('/assets/css/style.css'); ?>"/>
    
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href=""><img src="<?= Geral::theme('/assets/images/devsbook_logo.png'); ?>" /></a>
            </div>

            <!-- MENU -->
            <div class="head-side">
                <?= $this->section('navbar'); ?>
            </div>
        </div>
    </header>
    <section class="container main">
        <!-- MENU LATERAL -->
        <?= $this->section('sidebar'); ?>

        <!-- CONTEUDO -->
        <?= $this->section('content'); ?>
        
    </section>
</body>
</html>