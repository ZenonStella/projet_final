<?php
include('inc/header.php');
require_once '../controllers/form_controller.php';
require_once '../controllers/addPicture_controller.php';
?>
<h2 class="text-center">Ajouter une image a la galerie</h2>
<form action="" method="POST" enctype="multipart/form-data">
    <div class="d-flex aling-items-center justify-content-evenly flex-wrap pt-3">
        <img class="thepicture border border-dark" id="imgPreview" src="../public/images/umbrella.png">
        <div class="d-flex flex-column">
            <label for="picture"><i class="bi bi-camera-fill"></i> Photo
                <span data-span="error-picture" class="text-danger fst-italic span-error"><?= isset($errors['picture']) ? $errors['picture'] : '' ?></span>
            </label>
            <input type="file" id="picture" name="picture" class="form-control">
        </div>
    </div>
    <div class="mb-3 col-11 justify-content-center aling-items-center flex-wrap">
        <label for="categorys">Categories
        <span class="ms-2 text-danger"><?= isset($errors['categorys']) ? $errors['categorys'] : '' ?></span>
        </label>
        <div class="input-group">
            <select name="categorys" id="categorys">
                <option value="">--- Choisir une categorie ---</option>
                <?php foreach ($categorysJobs as $categoryJob) { ?>
                    <option value="<?= $categoryJob['tp_id'] ?>"><?= $categoryJob['tp_name'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <input class="btn btn-primary mt-2" type="submit" value="Enregistrer">
    </div>
</form>

<?php
include('inc/footer.php');
?>
<script src="../assets/js/upload.js"></script>
<?php
require('inc/end.php');