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
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

