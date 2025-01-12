<?php

/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\LinkGenerator $link */

?>
<!DOCTYPE html>
<html lang="sk"></html>
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <meta charset="UTF-8">
    <title>E-shop - Posilkaris</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="old/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= $link->url("home.index") ?>">E-shop</a>
        <?php if ($auth->isLogged()) { ?>
            <a class="nadpis" style="font-size: 20px">Prihlasený použivateľ: <?= $auth->getLoggedUserName()?></a>
        <?php } ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?= $link->url("home.index") ?>" class="nav-link active btn btn-primary me-2">Domov</a>
                </li>
                <?php if (!$auth->isLogged()) { ?>
                    <li class="nav-item">
                        <a href="<?= $link->url("home.registration") ?>" class="nav-link btn btn-primary me-2">Registracia</a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a href="<?= $link->url("home.contact") ?>" class="nav-link btn btn-primary">Kontakt</a>
                </li>
            </ul>
            <?php if ($auth->isLogged()) { ?>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="<?= $link->url("auth.delete") ?>">Zmazanie účtu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $link->url("home.edit") ?>">Úprava účtu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $link->url("auth.logout") ?>">Odhlásenie</a>
                    </li>
                </ul>
            <?php } else { ?>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= \App\Config\Configuration::LOGIN_URL ?>">Prihlásenie</a>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </div>
</nav>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
</body>
</html>
