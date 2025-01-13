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
            <form class="custom-contact-form"
                <!-- 1.label/header -->
                <div class="form-group">
                    <label for="username">Používateľské meno</label>
                    <input type="text" class="form-control" id="mail" required value=<?= isset($_SESSION['username']) ? $_SESSION['username'] : ""?>>
                </div>
                <!-- 2.label/header -->
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" id="mail" required value=<?= isset($_SESSION['email']) ? $_SESSION['email'] : ""?>>
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