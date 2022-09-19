<?php
session_start();
// require_once '../controllers/calendar_controller.php';
// require_once '../controllers/meets_controller.php';
require('../inc/header.php');
?>
<h2 class="text-center mb-5">Bienvenus sur notre page de contact!</h2>
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Contact</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Nous laisser<br> un message</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Prendre<br> rendez-vous</button>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active my-5" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">...</div>
    <div class="tab-pane fade my-5" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
        <form class="row justify-content-center" action="" method="post">
            <div class="mb-3 col-11">
                <label for="">Nom et Prénom</label>
                <div class="input-group">
                    <input type="text" aria-label="First name" placeholder="Nom" class="form-control" >
                    <input type="text" aria-label="Last name" placeholder="Prénom" class="form-control" >
                </div>
            </div>
            <div class="mb-3 col-11">
                <label for="">Email</label>
                <span class="ms-2 text-danger"><?= isset($errors['mail']) ? $errors['mail'] : '' ?></span>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email" aria-label="Email"  value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">
                </div>
            </div>
            <div class="mb-3 col-11">
                <label for="phone">Numéro de téléphone</label>
                <span class="ms-2 text-danger"><?= isset($errors['phone']) ? $errors['phone'] : '' ?></span>
                <div class="input-group">
                    <input type="phone" class="form-control" placeholder="Ex: 07 00 00 00 00" id="phone" name="phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>"  value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
                </div>
            </div>
            <div class="mb-3 col-11">
                <label for="text">Message</label>
                <div class="input-group">
                    <textarea id="text" class="form-control" placeholder="Ecrire ici..." aria-label="With textarea" ></textarea>
                </div>
            </div>
            <div class="col-11 mb-3 justify-content-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" >
                    <label class="form-check-label" for="invalidCheck2">
                        J'ai lu et j'accepte la <a href="politiques.php">politique de confidentialité</a>
                    </label>
                </div>
            </div>
            <div class="col-11 mb-3 text-center">
                <button class="btn btn-primary" type="submit">Envoyer</button>
            </div>
        </form>
    </div>
    <div class="tab-pane fade my-5" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
        <form class="row justify-content-center" action="" method="post">
            <div class="mb-3 col-11">
                <label for="">Nom et Prénom</label>
                <div class="input-group">
                    <input type="text" aria-label="First name" placeholder="Nom" class="form-control" >
                    <input type="text" aria-label="Last name" placeholder="Prénom" class="form-control" >
                </div>
            </div>
            <div class="mb-3 col-11">
                <label for="">Email</label>
                <span class="ms-2 text-danger"><?= isset($errors['mail']) ? $errors['mail'] : '' ?></span>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email" aria-label="Email"  value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">
                </div>
            </div>
            <div class="mb-3 col-11">
                <label for="phone">Numéro de téléphone</label>
                <span class="ms-2 text-danger"><?= isset($errors['phone']) ? $errors['phone'] : '' ?></span>
                <div class="input-group">
                    <input type="phone" class="form-control" placeholder="Ex: 07 00 00 00 00" id="phone" name="phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>" >
                </div>
            </div>
            <div class="col-10 mb-3 justify-content-center">
                <div class="row">
                    <div class="col-6">
                        <label class="form-check-label" for="date">date de rendez-vous <?= isset($errors['date']) ? $errors['date'] : '' ?></label>
                        <div class="input-group">
                            <input type="date" class="form-control" name="date" id="date" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>" >
                        </div>
                    </div>
                    <div class="col-6">
                        <label class="form-check-label" for="hour">et heure <?= isset($errors['hour']) ? $errors['hour'] : '' ?></label>
                        <div class="input-group">
                            <input type="time" class="form-control" name="hour" id="hour" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-11 mb-3 justify-content-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" >
                    <label class="form-check-label" for="invalidCheck2">
                        J'ai lu et j'accepte la <a href="politiques.php">politique de confidentialité</a>
                    </label>
                </div>
            </div>
            <div class="col-11 mb-3 text-center">
                <button class="btn btn-primary" type="submit">Envoyer</button>
            </div>
        </form>
    </div>
</div>
<?php
require('../inc/footer.php');

include('../inc/end.php');
?>