<?php

require 'classes/review-view.php';
require 'classes/review-model.php';

$pdo = require 'partials/connection.php';

$reviewModel = new ReviewModel($pdo);
$reviewView = new ReviewView();

$bookId = $_GET["id"];
$reviews = $reviewModel->getAllReviewsByBook($bookId);

include "./partials/header.php";
include "./partials/nav.php";
?>


<main class="container">

    <div class="all-reviews-container">
        <?php
        $reviewView->renderAllReviewsByBook($reviews);
        ?>
    </div>
</main>




<?php
include "./partials/footer.php";
