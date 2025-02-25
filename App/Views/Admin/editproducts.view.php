<?php
/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */
?>

<div class="container-fluid" style="min-height:100vh">
    <table class="table table-bordered" id="table2">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Stock</th>
            <th scope="col">Text</th>
            <th scope="col">Uprava</th>
            <th scope="col">Zmazanie</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $product): ?>
            <tr>
                <td><?= $product->getName()?></td>
                <td><?= $product->getPrice()?></td>
                <td><?= $product->getStock()?></td>
                <td><?= $product->getText()?></td>
                <td><a href="<?= $link->url("admin.edit", ["id" => $product->getId(), "is" => "p"]) ?>" class="nav-link active btn btn-secondary">Upraviť</a></td>
                <td><a href="<?= $link->url("admin.deleteproduct", ["id" => $product->getId(), "is" => "p"]) ?>" class="nav-link active btn btn-secondary">Vymazať</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
