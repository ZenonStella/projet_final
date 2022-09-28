<?php
session_start();
require_once '../controllers/form_controller.php';
require_once '../controllers/admin_devis_controller.php';
require('inc/header.php');
?>
<div class="row justify-content-center">
    <div class="col-11 my-3">
        <form action="" method="post">
            <div class="mb-3 col-11">
                <label for="name">Nom</label>
                <span class="ms-2 text-danger"><?= isset($errors['name']) ? $errors['name'] : '' ?></span>
                <div class="input-group">
                    <input type="text" id="name" name="name" aria-label="First name" placeholder="Nom" class="form-control" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>">
                </div>
            </div>
            <div class="mb-3 col-11">
                <label for="categorys">Categories</label>
                <span class="ms-2 text-danger"><?= isset($errors['categorys']) ? $errors['categorys'] : '' ?></span>
                <div class="input-group">
                    <select name="categorys" id="categorys">
                        <option value="">--- Choisir une categorie ---</option>
                        <?php foreach ($categorysJobs as $categoryJob) { ?>
                            <option value="<?= $categoryJob['c_id'] ?>"><?= $categoryJob['c_name'] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="col-11 mb-3 text-center">
                <button class="btn greenbtn" type="submit">Envoyer</button>
            </div>
        </form>
    </div>
</div>



<?php
require('inc/footer.php'); ?>
<script src="../assets/js/form.js"></script>
<?php
require('inc/end.php');