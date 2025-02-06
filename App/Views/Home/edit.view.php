<?php

/** @var \App\Core\LinkGenerator $link */

?>

<!-- Úvod stránky -->
<section class="bg-primary text-white text-center py-5">
    <div class="container">
        <h1>Upravenie profiilu.</h1>
    </div>
</section>


<div class="container d-flex justify-content-center align-items-center">
    <div class="row">
        <div class="col">
            <h2 class="text-center">Uprava profilu</h2>
            <form action="<?= $link->url("auth.edit")?>" method="post" class="custom-registration-form">
                <div class="text-center text-danger mb-3">
                    <?= @$_GET['0'] ?>
                </div>
                <div class="form-group">
                    <label for="username">Používateľské meno</label>
                    <input name="username" type="text" id="username" class="form-control" required value=<?= isset($_SESSION['username']) ? $_SESSION['username'] : ""?>>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input name="email" type="email" id="email" class="form-control" required value=<?= isset($_SESSION['email']) ? $_SESSION['email'] : ""?>>
                </div>
                <div class="form-group">
                    <label for="password">Heslo</label>
                    <input name="password" type="password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Potvrdiť heslo</label>
                    <input name="confirmPassword" type="password" id="confirm-password" class="form-control" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button name="submit" type="submit" class="btn btn-primary">Upraviť profil</button>
                </div>
            </form>
        </div>
    </div>
</div>