<?php

/** @var Array $data */

?>

<!-- Úvod stránky -->
<section class="bg-primary  text-white text-center py-5">
    <div class="container">
        <h1>Vitajte v našom E-shope Posilkaris.</h1>
        <p class="podnadpis">Najlepšie produkty ktoré nájdete pre cvičenie a stravu.</p>
    </div>
</section>

<!-- Odporúčané produkty -->
<section id="produkty" class="py-5">
    <div class="container">
        <h2 class="text-center">Odporúčané produkty</h2>
        <div class="row">
            <?php foreach ($data as $product) { ?>
                <div class="col">
                    <div class="card">
                        <img src="old/images/<?= $product->getProductname() ?>.jpg" class="card-img-top" alt="šejker">
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


<div class="container" id="table">
    <table class="table">
        <thead>
        <tr>
            <th class="head">Kupujuci</th>
            <th>Nakupil</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Jozo</td>
            <td>Protein</td>
        </tr>
        <tr>
            <td>Fero</td>
            <td>Shaker</td>
        </tr>
        <tr>
            <td>Mirec</td>
            <td>Trhačky</td>
        </tr>
        </tbody>
    </table>
</div>