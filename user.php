<?php

require "classes/user-model.php";
require "classes/user-view.php";

$pdo = require 'partials/connection.php';

$userModel = new UserModel($pdo);
$userView = new UserView();

$username = $_GET["user"];
$userInfo = $userModel->getSingleUser($username);

include "./partials/header.php";
include "./partials/nav.php";
?>


<main class="container">
    <h2 class='users-username'><?php echo $userInfo[0]['username'] ?></h2>
    <div class="all-books-container">
        <?php
        $userView->renderSingleUser($userInfo);
        ?>
    </div>
</main>




<?php
include "./partials/footer.php";
