<?php
/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */
?>

<div class="container-fluid" style="min-height:100vh">
    <div class="row">
        <div class="col">
            <?php if($data instanceof \App\Models\User){ ?>
            <h2 class="text-center">Uprava profilu použivateľov</h2>
            <form action="<?= $link->url("admin.editadmin", ["id" => $data->getId(), "is" => "u"])?>" method="post" class="custom-edituser-form">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input name="username" type="text" id="username" class="form-control" required value=<?= $data->getUsername() ?>>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" id="email" class="form-control" required value=<?= $data->getEmail() ?>>
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <input name="role" type="text" id="role" class="form-control" required value=<?= $data->getRole() ?>>
                </div>
                <div class="d-flex justify-content-center">
                    <button name="submit" type="submit" class="btn btn-primary">Upraviť profil</button>
                </div>
            </form>
            <?php } elseif ($data instanceof \App\Models\Products) { ?>
                <h2 class="text-center">Uprava produktov</h2>
                <form action="<?= $link->url("admin.editadmin", ["id" => $data->getId(), "is" => "p"])?>" method="post" class="custom-edituser-form">
                    <div class="form-group">
                        <label for="producturl">ProductURL</label>
                        <input name="producturl" type="text" id="producturl" class="form-control" required value=<?= $data->getProducturl() ?>>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input name="name" type="text" id="name" class="form-control" required value=<?= $data->getName() ?>>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input name="price" type="number" step="0.01" min="0" id="price" class="form-control" required value=<?= $data->getPrice() ?>>
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input name="stock" type="number" id="stock" step="1" min="0" class="form-control" required value=<?= $data->getStock() ?>>
                    </div>
                    <div class="form-group">
                        <label for="text">Text</label>
                        <input name="text" type="text" maxlength="500" id="text" class="form-control" required >
                    </div>
                    <div class="d-flex justify-content-center">
                        <button name="submit" type="submit" class="btn btn-primary">Upraviť produkt</button>
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div>