<?php

/** @var \App\Core\LinkGenerator $link */
?>

<div class="container-fluid" style="min-height:100vh">
    <div class="row">
        <div class="col">
            <div>
                <h1 style="text-align: center">Vitaj, <strong><?= $auth->getLoggedUserName() ?></strong>!</h1><br><br>
                <ul class="navbar-nav" id="adminNav">
                    <a id="adminLink" href="<?= $link->url("home.index") ?>" class="nav-link btn btn-secondary">Úprava uživateľov</a>
                    <a id="adminLink" href="<?= $link->url("home.contact") ?>" class="nav-link btn btn-secondary">Úprava Produktov</a>
                    <a id="adminLink" href="<?= $link->url("home.contact") ?>" class="nav-link btn btn-secondary">Kontakt</a>
                </ul>
            </div>
        </div>
    </div>
</div>