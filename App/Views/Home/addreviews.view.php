<?php
/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */
?>

<div class="container-fluid" style="min-height: 100vh">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Pridanie recenzii</h5>
                    <div class="text-center text-danger mb-3">
                        <?= @$data['message'] ?>
                    </div>
                    <form class="form-signin" method="post" action="<?= $link->url("home.addreview") ?>">
                        <div class="form-label-group mb-3">
                            <select name="produkt" id="produkt" class="form-control" required>
                                <?php foreach ($data['products'] as $product) { ?>
                                    <option value="<?= $product->getId() ?>"> <?= $product->getName() ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-label-group mb-3">
                            <select name="hodnotenie" id="hodnotenie" class="form-control" required>
                                <?php for($i = 0; $i < 5; $i++) { ?>
                                    <option value="<?= $i + 1 ?>"> <?= $i + 1 ?>
                                    </option>
                                }
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-label-group mb-3">
                            <input name="text" type="text" id="name" class="form-control" placeholder="Text" required>
                        </div>
                        <input type="hidden" name="user_id" value="<?= $data['user']->getId()?>">
                        <div class="text-center">
                            <button class="btn btn-primary" type="submit" name="submit">Pridať recenziu
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
