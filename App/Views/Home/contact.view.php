<?php

/** @var Array $data */

/** @var \App\Core\LinkGenerator $link */
?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <meta charset="UTF-8">
    <title>E-shop - Posilkaris</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="old/css/style.css">
</head>

<!-- Úvod stránky -->
<section class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1>Kontaktujte nás.</h1>
        <p class="podnadpis">Ak máte s niečím problém neváhajte nás kontaktovať.</p>
    </div>
</section>

<!-- Kontaktovanie pomocou forms -->
<div class="container justify-content-center align-items-center">
    <div class="row">
        <div class="col">
            <form class="custom-contact-form">
                <!-- 1.label/header -->
                <div class="form-group">
                    <label for="username">Používateľské meno</label>
                    <input type="text" id="username" class="form-control" required>
                </div>
                <!-- 2.label/header -->
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" class="form-control" required>
                </div>
                <!-- 3.label/header -->
                <div class="form-group">
                    <label for="message">Správa:</label>
                    <textarea id="message" rows="5" required></textarea>
                </div>
                <!-- Button na odoslanie -->
                <button type="submit" class="btn btn-primary">Odoslať</button>
            </form>
        </div>
    </div>
</div>

<!-- Spodok stranky -->
<footer class="footer">
    <div class="container text-center">
        <p class="upper">&copy; 2024 Posilkaris. Všetky práva vyhradené.</p>
        <p class="lower">
            Kontakt: <a href="mailto:info@posilkaris.sk">info@posilkaris.sk</a> | Telefón: +421 123 456 789
        </p>
    </div>
</footer>