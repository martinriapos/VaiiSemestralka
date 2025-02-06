<?php

/** @var Array $data */

?>

<section class="bg-primary  text-white text-center py-5">
    <div class="container">
        <h1>Vitajte v našom E-shope Posilkaris.</h1>
        <p class="podnadpis">Najlepšie produkty ktoré nájdete pre cvičenie a stravu.</p>
    </div>
</section>

<script src="public\js\script.js"></script>
<div class="container text-center">
    <input type="text" id="search" placeholder="Hľadať produkt...">
</div>
<section id="produkty" class="py-5">
    <div class="container">
        <h2 class="text-center">Produkty</h2>
        <div class="row">
            <?php foreach ($data as $product) { ?>
                <div class="col-4">
                    <div class="card list-item">
                        <img src="<?= $product->getProductUrl()?>" class="card-img-top" alt="<?= $product->getName()?>">
                        <div class="card-body">
                            <h3 class="card-title list-item"><?=htmlspecialchars($product->getName())?></h3>
                            <p class="card-text"><?=$product->getText()?></p>
                            <p class="price"><?=$product->getPrice()?></p>
                            <a class="btn btn-primary">Kúpiť teraz</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>