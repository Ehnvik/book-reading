<?php

require "classes/user-model.php";
require "classes/user-view.php";

$pdo = require 'partials/connection.php';

$userModel = new UserModel($pdo);
$userView = new UserView();

$users = $userModel->getAllUsers();

include "./partials/header.php";
include "./partials/nav.php";
?>

<main class="container">
    <h2>Användare</h2>
    <div class="all-books-container">
        <?php
        $userView->renderAllUsers($users);
        ?>
    </div>
</main>




<?php
include "./partials/footer.php";
