<?php
/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */
?>

<div class="container-fluid" style="min-height: 100vh">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Pridanie produktu</h5>
                    <div class="text-center text-danger mb-3">
                        <?= @$_GET['0'] ?>
                    </div>
                    <form class="form-signin" method="post" action="<?= $link->url("admin.addproduct") ?>">
                        <div class="form-label-group mb-3">
                            <input name="producturl" type="text" id="producturl" class="form-control" placeholder="ProductURL" required autofocus>
                        </div>
                        <div class="form-label-group mb-3">
                            <input name="name" type="text" id="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="form-label-group mb-3">
                            <input name="price" type="number" step="0.01" min="0" id="price" class="form-control" placeholder="Price" required>
                        </div>
                        <div class="form-label-group mb-3">
                            <input name="stock" type="number" step="1" min="0" id="stock" class="form-control" placeholder="Stock" required>
                        </div>
                        <div class="form-label-group mb-3">
                            <input name="text" type="text" id="text" class="form-control" placeholder="Text" required>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary" type="submit" name="submit">Pridať produkt
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
