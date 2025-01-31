<?php

/** @var Array $data */

?>

<section class="bg-primary  text-white text-center py-5">
    <div class="container">
        <h1>Vitajte v našom E-shope Posilkaris.</h1>
        <p class="podnadpis">Najlepšie produkty ktoré nájdete pre cvičenie a stravu.</p>
    </div>
</section>

<section id="produkty" class="py-5">
    <div class="container">
        <h2 class="text-center">Odporúčané produkty</h2>
        <div class="row">
            <?php foreach ($data as $product) { ?>
                <div class="col">
                    <div class="card">
                        <img src=<?= $product->getProductUrl()?> class="card-img-top" alt="<?= $product->getName()?>">
                        <div class="card-body">
                            <h3 class="card-title"><?=$product->getName()?></h3>
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
