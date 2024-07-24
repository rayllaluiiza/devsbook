<?php

use Source\Helpers\Geral;
?>

<div class="head-side-left">
    <div class="search-area">
        <form method="GET">
            <input type="search" placeholder="Pesquisar" name="s" />
        </form>
    </div>
</div>
<div class="head-side-right">
    <a href="" class="user-area">
        <div class="user-area-text">Bonieky</div>
        <div class="user-area-icon">
            <img src="<?= Geral::theme('/media/avatars/avatar.jpg'); ?>" />
        </div>
    </a>
    <a href="" class="user-logout">
        <img src="<?= Geral::theme('/assets/images/power_white.png'); ?>" />
    </a>
</div>