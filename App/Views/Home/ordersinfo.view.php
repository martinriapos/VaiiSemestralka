<?php
/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */
?>

<section class="bg-primary  text-white text-center py-5">
    <div class="container">
        <h1>História nákupov.</h1>
    </div>
</section>

<div class="container-fluid" style="min-height:100vh">
    <table class="table table-bordered" id="table2">
        <thead>
        <tr>
            <th scope="col">Názov produktu</th>
            <th scope="col">Počet</th>
            <th scope="col">Cena</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $orderproduct) {
            $product = \App\Models\Products::getOne($orderproduct->getProductId()) ?>
            <tr>
                <th><?=$product->getName()?></th>
                <td><?=$orderproduct->getQuantity()?></td>
                <td><?=$orderproduct->getPrice()?>$</td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
