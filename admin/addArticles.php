<?php
session_start();
require_once '../controllers/form_controller.php';
require_once '../controllers/addArticles_controller.php';
include('inc/header.php');
    var_dump($_POST);
?>
<h2 class="text-center">Ajouter un article aux actualitées</h2>
<form action="" method="POST" enctype="multipart/form-data" class="row justify-content-center">
    <div class="mb-3 col-11">
        <label for="title">Titre de l'article</label>
        <span class="ms-2 text-danger"><?= isset($errors['title']) ? $errors['title'] : '' ?></span>
        <div class="input-group">
            <input type="text" name="title" id="title" title="title" aria-label="Title" placeholder="Titre de l'article" class="form-control" value="<?= isset($_POST['title']) ? $_POST['title'] : '' ?>">
        </div>
    </div>
    <div class="mb-3 col-11">
        <label for="apercu">Aperçu de l'article</label>
        <span class="ms-2 text-danger"><?= isset($errors['apercu']) ? $errors['apercu'] : '' ?></span>
        <div class="input-group">
            <input type="text" name="apercu" id="apercu" apercu="apercu" aria-label="Aperçu " placeholder="Aperçu de l'article" class="form-control" value="<?= isset($_POST['apercu']) ? $_POST['apercu'] : '' ?>">
        </div>
    </div>
    <div class="mb-3 col-11">
        <label for="text">Message *</label>
        <span class="ms-2 text-danger"><?= isset($errors['text']) ? $errors['text'] : '' ?></span>
        <div class="input-group">
            <textarea id="text" name="text" id="text" class="form-control" placeholder="Ecrire ici votre message..." aria-label="With textarea"></textarea>
        </div>
    </div>
    <div class="col-11 aling-items-center justify-content-evenly flex-wrap pt-3">
        <img class="thepicture border rounded" id="imgPreview" src="../public/images/umbrella.png">
        <div class="d-flex flex-column">
            <label for="picture"><i class="bi bi-camera-fill"></i> Photo
                <span data-span="error-picture" class="text-danger fst-italic span-error"><?= isset($errors['picture']) ? $errors['picture'] : '' ?></span>
            </label>
            <input type="file" id="picture" name="picture" class="form-control">
        </div>
    </div>
    <div class="mb-3 col-11">
        <label for="name">Nom de l'image</label>
        <span class="ms-2 text-danger"><?= isset($errors['name']) ? $errors['name'] : '' ?></span>
        <div class="input-group">
            <input type="text" id="name" name="name" aria-label="First name" placeholder="Nom" class="form-control" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>">
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <input class="btn greenbtn mt-2" type="submit" value="Enregistrer">
    </div>
</form>

<?php
require('inc/footer.php');
require_once '../inc/sweetAlert.php';
?>
<script src="../assets/js/upload.js"></script>
<?php
require('inc/end.php');
