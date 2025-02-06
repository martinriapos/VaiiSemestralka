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

        </tbody>
    </table>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        function loadUsers() {
            fetch("<?= $link->url('admin.editusers') ?>", {
                method: "GET",
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            })
                .then(response => response.json())
                .then(data => {
                    let tableBody = document.querySelector("tbody");
                    tableBody.innerHTML = "";
                    data.forEach(user => {
                        let row = `
                    <tr>
                        <th>${user.username}</th>
                        <td>${user.email}</td>
                        <td>${user.role}</td>
                        <td>${user.active}</td>
                        <td><a href="?c=admin&a=edit&id=${user.id}&is=u" class="nav-link active btn btn-secondary">Upraviť</a></td>
                    </tr>
                `;
                        tableBody.innerHTML += row;
                    });
                })
                .catch(error => console.error("Chyba pri načítaní užívateľov:", error));
        }
        loadUsers();
        setInterval(loadUsers, 10000);
    });
</script>