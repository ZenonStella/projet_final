<?php
include('inc/header.php');
require_once '../controllers/form_controller.php';
require_once '../controllers/addPicture_controller.php';
?>
<h2 class="text-center">Ajouter une image a la galerie</h2>
<form action="" method="POST" enctype="multipart/form-data" class="row justify-content-cent">
    <div class="col-11 aling-items-center justify-content-evenly flex-wrap pt-3">
        <img class="thepicture border rounded" id="imgPreview" src="../public/images/umbrella.png">
        <div class="d-flex flex-column">
            <label for="picture"><i class="bi bi-camera-fill"></i> Photo
                <span data-span="error-picture" class="text-danger fst-italic span-error"><?= isset($errors['picture']) ? $errors['picture'] : '' ?></span>
            </label>
            <input type="file" data id="picture" name="picture" class="form-control">
        </div>
    </div>
    <div class="mb-3 col-11">
                <label for="name">Nom</label>
                <span class="ms-2 text-danger"><?= isset($errors['name']) ? $errors['name'] : '' ?></span>
                <div class="input-group">
                    <input type="text" id="name" name="name" aria-label="First name" placeholder="Nom" class="form-control" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>">
                </div>
            </div>
    <div class="mb-3 col-11 justify-content-center aling-items-center flex-wrap">
        <label for="categorys">Categories
        <span class="ms-2 text-danger"><?= isset($errors['categorys']) ? $errors['categorys'] : '' ?></span>
        </label>
        <div class="input-group">
            <select name="categorys" class="form-select" id="categorys">
                <option value="">--- Choisir une categorie ---</option>
                <?php foreach ($categorysJobs as $categoryJob) { ?>
                    <option value="<?= $categoryJob['tp_id'] ?>"><?= $categoryJob['tp_name'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-11 mb-3 justify-content-center">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name="after" id="after">
            <label class="form-check-label" for="after">
                Cocher si c'est une photo après traveau
            <span class="ms-2 text-danger"><?= isset($errors['after']) ? $errors['after'] : '' ?></span>
            </label>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <input class="btn btn-primary mt-2" type="submit" value="Enregistrer">
    </div>
</form>

<?php
include('inc/footer.php');
require_once '../inc/sweetAlert.php'
?>
<script src="../assets/js/upload.js"></script>
<?php
require('inc/end.php');