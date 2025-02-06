<?php
/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */
?>

<div class="container-fluid" style="min-height:100vh">
    <table class="table table-bordered" id="table2">
        <thead>
        <tr>
            <th scope="col">Username</th>
            <th scope="col">Product</th>
            <th scope="col">Rating</th>
            <th scope="col">Text</th>
            <th scope="col">Zmazanie</th>
            <th scope="col">Úprava</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $review) { ?>
            <?php $product = \App\Models\Products::getOne($review->getProductId())?>
            <?php $user = \App\Models\User::getOne($review->getUserId())?>
            <tr>
                <th><?=$user->getUsername()?></th>
                <td><?=$product->getName()?></td>
                <td><?=$review->getRating()?></td>
                <td><?=$review->getText()?></td>
                <td><a href="<?= $link->url("admin.edit", ["id" => $review->getId(), "is" => "r"]) ?>" class="nav-link active btn btn-secondary">Upraviť</a></td>
                <td><a href="<?= $link->url("admin.deletereview", ["id" => $review->getId()]) ?>" class="nav-link active btn btn-secondary">Vymazať</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

