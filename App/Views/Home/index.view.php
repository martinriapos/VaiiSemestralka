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
            <!-- Produkt 1 -->
            <div class="col">
                <div class="card">
                    <img src="old/images/shaker.jpg" class="card-img-top" alt="šejker">
                    <div class="card-body">
                        <h3 class="card-title"><?=$data[0]->getName()?></h3>
                        <p class="card-text"><?=$data[0]->getText()?></p>
                        <p class="price"><?=$data[0]->getPrice()?></p>
                        <a class="btn btn-primary">Kúpiť teraz</a>
                    </div>
                </div>
            </div>
            <!-- Produkt 2 -->
            <div class="col">
                <div class="card">
                    <img src="old/images/protein.jpg" class="card-img-top"  alt="protein">
                    <div class="card-body">
                        <h3 class="card-title"><?=$data[1]->getName()?></h3>
                        <p class="card-text"><?=$data[1]->getText()?></p>
                        <p class="price"><?=$data[1]->getPrice()?></p>
                        <a class="btn btn-primary">Kúpiť teraz</a>
                    </div>
                </div>
            </div>
            <!-- Produkt 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="old/images/trhacky.jpg" class="card-img-top" alt="trhačky">
                    <div class="card-body">
                        <h3 class="card-title"><?=$data[2]->getName()?></h3>
                        <p class="card-text"><?=$data[2]->getText()?></p>
                        <p class="price"><?=$data[2]->getPrice()?></p>
                        <a class="btn btn-primary">Kúpiť teraz</a>
                    </div>
                </div>
            </div>
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


<!-- Spodok stranky -->
<footer class="footer">
    <div class="container text-center">
        <p class="upper">&copy; 2024 Posilkaris. Všetky práva vyhradené.</p>
        <p class="lower">
            Kontakt: <a href="mailto:info@posilkaris.sk">info@posilkaris.sk</a> | Telefón: +421 123 456 789
        </p>
    </div>
</footer>