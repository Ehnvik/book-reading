<?php

require_once "./partials/connection.php";
require_once 'classes/author-model.php';

$authorModel = new AuthorModel(connection($host, $db, $user, $password));

include "./partials/header.php";
include "./partials/nav.php";
?>


<main class="container">
    <form action="./form-handlers/add-book-form.php" method="POST">
        <label for="title">Boktitel:</label>
        <input type="text" id="title" name="title" required>

        <div>
            <label for="author">Författare: </label>
            <select name="author_id" id="author">
                <option value="">-- Välj författare --</option>

                <?php
                $authors = $authorModel->getAllAuthors();
                foreach ($authors as $author) {
                    echo "<option value='{$author['id']}'>{$author['name']}</option>";
                }
                ?>

            </select>
        </div>
        <input type="submit" value="Lägg till">
    </form>
</main>




<?php
include "./partials/footer.php";
