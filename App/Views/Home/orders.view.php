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
            <th scope="col">ID Objednavky</th>
            <th scope="col">Kedy</th>
            <th scope="col">Status</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $order) { ?>
            <tr>
                <th><?=$order->getId()?></th>
                <td><?=$order->getDate()?></td>
                <td><?=$order->getStatus()?></td>
                <td><a href="<?= $link->url("home.ordersinfo", ["id" => $order->getId()]) ?>" class="nav-link active btn btn-secondary">Podrobnosti</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
