<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>E-shop - Posilkaris</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="old/css/style.css">
</head>
<body>

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
                    <img src="old/images/trhacky.jpg" class="card-img-top" alt="trhačky">
                    <div class="card-body">
                        <h3 class="card-title">Trhačky</h3>
                        <p class="card-text">Trhačky X-Grip slúžia pre lepší úchop osi pri silovom tréningu. Pomocou slučky si vytvoríte otvor pre zápästie a druhý koniec s protišmykovou vrstvou pevne omotáte okolo činky. Odľahčíte tak predlaktia pri ťahových cvikoch, ako je napríklad mŕtvy ťah. Trhačky vám tak umožnia pevnejší úchop.</p>
                        <p class="price">5,59$</p>
                        <a class="btn btn-primary">Kúpiť teraz</a>
                    </div>
                </div>
            </div>
            <!-- Produkt 2 -->
            <div class="col">
                <div class="card">
                    <img src="old/images/shaker.jpg" class="card-img-top" alt="šejker">
                    <div class="card-body">
                        <h3 class="card-title">Šejker čierny Transparent Black 700 ml</h3>
                        <p class="card-text">Šejker čierny Transparent Black s objemom 700 ml je vyrobený z netoxického plastu. Obsahuje klasický závit a sitko na dokonalé rozmiešavanie vašich obľúbených proteínov, predtréningových stimulantov a kreatínov. Vďaka transparentnému dizajnu môžete jednoducho skontrolovať množstvo nápoja v šejkri.</p>
                        <p class="price">7,49$</p>
                        <a class="btn btn-primary">Kúpiť teraz</a>
                    </div>
                </div>
            </div>
            <!-- Produkt 3 -->
            <div class="col">
                <div class="card">
                    <img src="old/images/protein.jpg" class="card-img-top"  alt="protein">
                    <div class="card-body">
                        <h3 class="card-title">True Whey - GymBeam proteín</h3>
                        <p class="card-text">True Whey je srvátkový koncentrát (WPC), ktorý patrí k najobľúbenejším proteínom. Má vysoký obsah bielkovín, ktoré prispievajú k rastu aj udržaniu svalovej hmoty. Okrem toho vyniká výbornou vstrebateľnosťou, ľahkou stráviteľnosťou a prirodzene vysokým obsahom esenciálnych aminokyselín BCAA.</p>
                        <p class="price">16,95$</p>
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

</body>
</html>