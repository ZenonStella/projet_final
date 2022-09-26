<?php
session_start();
require_once '../controllers/form_controller.php';
require_once '../controllers/meets_controller.php';
require('../inc/header.php');
?>
<pre>
    <?php
    print_r($_POST);
    ?>
</pre>
<h2 class="text-center">Bienvenus sur notre page de prise de rendez-vous!</h2>
<p class="text-center mb-5">Prenez rendez-vous avec nous</p>
<ul class="nav nav-tabs mb-5">
    <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="missives.php">Nous laisser un massage</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="meets.php">Prendre rendez-vous</a>
    </li>
</ul>
<form class="row justify-content-center" action="" method="post">
    <div class="mb-3 col-11">
        <label for="firstname">Nom et Prénom <span class="text-danger">*</span></label>
        <span class="ms-2 text-danger"><?= isset($errors['firstname']) ? $errors['firstname'] : '' ?></span>
        <span class="ms-2 text-danger"><?= isset($errors['lastname']) ? $errors['lastname'] : '' ?></span>
        <div class="input-group">
            <input type="text" name="firstname" id="firstname" aria-label="First name" placeholder="Nom" class="form-control" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>">
            <input type="text" name="lastname" id="lastname" aria-label="Last name" placeholder="Prénom" class="form-control" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>">
        </div>
    </div>
    <div class="mb-3 col-11">
        <label for="mail">Email <span class="text-danger">*</span></label>
        <span class="ms-2 text-danger"><?= isset($errors['mail']) ? $errors['mail'] : '' ?></span>
        <div class="input-group">
            <input type="text" name="mail" id="mail" class="form-control" placeholder="Email" aria-label="Email" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">
        </div>
    </div>
    <div class="mb-3 col-11">
        <label for="phone">Numéro de téléphone</label>
        <span class="ms-2 text-danger"><?= isset($errors['phone']) ? $errors['phone'] : '' ?></span>
        <div class="input-group">
            <input type="phone" class="form-control" placeholder="Ex: 07 00 00 00 00" id="phone" name="phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
        </div>
    </div>
    <div class="mb-3 col-11">
        <label for="date">Date et heure de rendez-vous <span class="text-danger">*</span></label>
        <span class="ms-2 text-danger"><?= isset($errors['date']) ? $errors['date'] : '' ?></span>
        <span class="ms-2 text-danger"><?= isset($errors['hour']) ? $errors['hour'] : '' ?></span>
        <div class="input-group">
            <input type="date" placeholder="Date" name="date" id="date" class="form-control" value="<?= isset($_POST['date']) ? $_POST['date'] : '' ?>">
            <input type="time" placeholder="Heure" name="hour" id="hour" class="form-control" value="<?= isset($_POST['hour']) ? $_POST['hour'] : '' ?>">
        </div>
    </div>
    <div class="col-11 mb-3 justify-content-center">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" name="cgu" id="cgu">
            <label class="form-check-label" for="cgu">
                J'ai lu et j'accepte la <a href="politiques.php">politique de confidentialité</a>
                <span class="ms-2 text-danger"><?= isset($errors['cgu']) ? $errors['cgu'] : '' ?></span>
            </label>
        </div>
    </div>
    <div class="col-11 mb-3 text-center">
        <button class="btn btn-primary" type="submit">Envoyer</button>
    </div>
</form>
<?php
require('../inc/footer.php'); 
require_once '../inc/sweetAlert.php';
include('../inc/end.php');
?>