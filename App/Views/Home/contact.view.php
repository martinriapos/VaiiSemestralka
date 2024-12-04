<?php

/** @var Array $data */
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\LinkGenerator $link */
?>
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