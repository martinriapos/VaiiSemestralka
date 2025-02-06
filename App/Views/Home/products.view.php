<?php

/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */
?>

<section class="bg-primary  text-white text-center py-5">
    <div class="container">
        <h1>Vitajte v našom E-shope Posilkaris.</h1>
        <p class="podnadpis">Najlepšie produkty ktoré nájdete pre cvičenie a stravu.</p>
    </div>
</section>

<section id="produkty" class="py-5">
    <div class="container">
        <h2 class="text-center">Produkty</h2>
        <div class="row" id="product-list">
        </div>
        <div id="pagination" class="text-center mt-4">
            <button id="firstPage" class="btn btn-secondary"><<</button>
            <button id="prevPage" class="btn btn-secondary"><</button>
            <button id="nextPage" class="btn btn-secondary">></button>
            <button id="lastPage" class="btn btn-secondary">>></button>
            <br>
            <span id="pageInfo"></span>
        </div>
    </div>
</section>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        let currentPage = 1;
        let lastPage = 1;

        function loadProducts(page) {
            fetch(`?c=home&a=products&page=${page}`, {
                method: "GET",
                headers: { "X-Requested-With": "XMLHttpRequest" }
            })
                .then(response => response.json())
                .then(data => {
                    let productContainer = document.querySelector("#product-list");
                    productContainer.innerHTML = "";

                    data.products.forEach(product => {
                        let productCard = `
                    <div class="col-4">
                        <div class="card list-item">
                            <img src="${product.producturl}" class="card-img-top" alt="${product.name}">
                            <div class="card-body">
                                <h3 class="card-title list-item">${product.name}</h3>
                                <p class="card-text">${product.text}</p>
                                <p class="price">${product.price} €</p>
                                <a class="btn btn-primary">Kúpiť teraz</a>
                            </div>
                        </div>
                    </div>
                `;
                        console.log(productCard);
                        productContainer.innerHTML += productCard;
                    });

                    document.getElementById("pageInfo").innerText = `Strana ${page} z ${data.totalPages}`;
                    document.getElementById("firstPage").disabled = page === 1;
                    document.getElementById("lastPage").disabled = page === data.totalPages;
                    document.getElementById("prevPage").disabled = page === 1;
                    document.getElementById("nextPage").disabled = page === data.totalPages;
                    lastPage = data.totalPages;

                })
                .catch(error => console.error("Chyba pri načítaní produktov:", error));
        }

        document.getElementById("prevPage").addEventListener("click", function () {
            if (currentPage > 1) {
                currentPage--;
                loadProducts(currentPage);
            }
        });

        document.getElementById("firstPage").addEventListener("click", function () {
            if (currentPage > 1) {
                currentPage = 1;
                loadProducts(currentPage);
            }
        });

        document.getElementById("nextPage").addEventListener("click", function () {
            currentPage++;
            loadProducts(currentPage);
        });

        document.getElementById("lastPage").addEventListener("click", function () {
            if (currentPage < lastPage) {
                currentPage = lastPage;
                loadProducts(currentPage);
            }
        });

        loadProducts(currentPage);
    });
</script>