<?php

/** @var \App\Core\LinkGenerator $link */

?>


<body>
<!-- Úvod stránky -->
<section class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1>Zaregistrujte sa.</h1>
        <p class="podnadpis">Zaragistrujte sa a pridajte sa ku skvelej komunite ľuďí.</p>
    </div>
</section>

<!-- Registracia pomocou forms -->
<div class="container d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col">
            <!-- Vrch text uvod -->
            <h2 class="text-center">Registrácia</h2>
            <form action="<?= $link->url("auth.registration")?>" method="post" class="custom-registration-form">
                <!-- 1.label/header -->
                <div class="form-group">
                    <label for="username">Používateľské meno</label>
                    <input name="username" type="text" id="username" class="form-control" required>
                </div>
                <!-- 2.label/header -->
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input name="email" type="email" id="email" class="form-control" required>
                </div>
                <!-- 3.label/header -->
                <div class="form-group">
                    <label for="password">Heslo</label>
                    <input name="password" type="password" id="password" class="form-control" required>
                </div>
                <!-- 4.label/header -->
                <div class="form-group">
                    <label for="confirm-password">Potvrdiť heslo</label>
                    <input name="confirmPassword" type="password" id="confirm-password" class="form-control" required>
                </div>
                <!-- Button na registraciu -->
                <div class="d-flex justify-content-center">
                    <button name="submit" type="submit" class="btn btn-primary">Zaregistrovať sa</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Spodok stranky -->
<footer class="footer">
    <div class="container text-center">
        <p class="upper">&copy; 2024 Posilkaris. Všetky práva vyhradené.</p>
        <p class="lower">
            Kontakt: <a href="mailto:info@posilkaris.sk">info@posilkarisfirma.sk</a> | Telefón: +421 123 456 789
        </p>
    </div>
</footer>

</body>
</html>