<?php
/** @var Array $data */
/** @var \App\Core\LinkGenerator $link */
?>

<div class="container-fluid" style="min-height:100vh">
    <table class="table table-bordered" id="table2">
        <thead>
        <tr>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Active</th>
            <th scope="col">Uprava</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $user): ?>
            <tr>
                <th><?= $user->getUsername()?></th>
                <td><?= $user->getEmail()?></td>
                <td><?= $user->getRole()?></td>
                <td><?= $user->getActive()?></td>
                <td><a href="<?= $link->url("admin.edit", ["id" => $user->getId(), "is" => "u"]) ?>" class="nav-link active btn btn-secondary">Upraviť</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
