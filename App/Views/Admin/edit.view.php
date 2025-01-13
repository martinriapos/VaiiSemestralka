<?php
/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */
?>

<div class="container-fluid" style="min-height:100vh">
    <div class="row">
        <div class="col">
            <!-- Vrch text uvod -->
            <h2 class="text-center">Uprava profilu použivateľov</h2>
            <form action="<?= $link->url("auth.editadmin", ["id" => $data->getId()])?>" method="post" class="custom-edituser-form">
                <!-- 1.label/header -->
                <div class="form-group">
                    <label for="username">Username</label>
                    <input name="username" type="text" id="username" class="form-control" required value=<?= $data->getUsername() ?>>
                </div>
                <!-- 2.label/header -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" id="email" class="form-control" required value=<?= $data->getEmail() ?>>
                </div>
                <!-- 3.label/header -->
                <div class="form-group">
                    <label for="role">Role</label>
                    <input name="role" type="text" id="role" class="form-control" required value=<?= $data->getRole() ?>>
                </div>
                <!-- Button na registraciu -->
                <div class="d-flex justify-content-center">
                    <button name="submit" type="submit" class="btn btn-primary">Upraviť profil</button>
                </div>
            </form>
        </div>
    </div>
</div>