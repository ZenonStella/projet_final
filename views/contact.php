<?php
session_start();
require_once '../controllers/calendar_controller.php';
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
                    <input type="text" aria-label="First name" placeholder="Nom" class="form-control" required>
                    <input type="text" aria-label="Last name" placeholder="Prénom" class="form-control" required>
                </div>
            </div>
            <div class="mb-3 col-11">
                <label for="">Email</label>
                <span class="ms-2 text-danger"><?= isset($errors['mail']) ? $errors['mail'] : '' ?></span>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email" aria-label="Email" required value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">
                </div>
            </div>
            <div class="mb-3 col-11">
                <label for="phone">Numéro de téléphone</label>
                <span class="ms-2 text-danger"><?= isset($errors['phone']) ? $errors['phone'] : '' ?></span>
                <div class="input-group">
                    <input type="phone" class="form-control" placeholder="Ex: 07 00 00 00 00" id="phone" name="phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>" required value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
                </div>
            </div>
            <div class="mb-3 col-11">
                <label for="">Message</label>
                <div class="input-group">
                    <textarea class="form-control" placeholder="Ecrire ici..." aria-label="With textarea" required></textarea>
                </div>
            </div>
            <div class="col-11 mb-3 justify-content-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
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
                    <input type="text" aria-label="First name" placeholder="Nom" class="form-control" required>
                    <input type="text" aria-label="Last name" placeholder="Prénom" class="form-control" required>
                </div>
            </div>
            <div class="mb-3 col-11">
                <label for="">Email</label>
                <span class="ms-2 text-danger"><?= isset($errors['mail']) ? $errors['mail'] : '' ?></span>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Email" aria-label="Email" required value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">
                </div>
            </div>
            <div class="mb-3 col-11">
                <label for="phone">Numéro de téléphone</label>
                <span class="ms-2 text-danger"><?= isset($errors['phone']) ? $errors['phone'] : '' ?></span>
                <div class="input-group">
                    <input type="phone" class="form-control" placeholder="Ex: 07 00 00 00 00" id="phone" name="phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>" required value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
                </div>
            </div>


            <div class="col-10 mb-3 justify-content-center">
                <p class="text-center"><a class="btn" href="index.php?<?= isset($_GET['month']) ? 'month=' . $_GET['month'] . '&' : '' ?>year=<?= $year - 1 ?>"><i class="bi bi-arrow-left-circle"></i></a><?= $year ?><a class="btn" href="index.php?<?= isset($_GET['month']) ? 'month=' . $_GET['month'] . '&' : '' ?>year=<?= $year + 1 ?>"><i class="bi bi-arrow-right-circle"></i></a></p>
                <p class="text-center"><a class="btn" href="index.php?<?= isset($_GET['year']) ? ($monthNumber == 1 ? 'year=' . $_GET['year'] - 1 . '&' :  'year=' . $_GET['year'] . '&') : '' ?>month=<?= $monthNumber == 1 ? 12 : $monthNumber - 1 ?>"><i class="bi bi-chevron-left me-1"></i></a><?= $monthLetters ?><a class="btn" href="index.php?<?= isset($_GET['year']) ? ($monthNumber == 12 ? 'year=' . $_GET['year'] + 1 . '&' :  'year=' . $_GET['year'] . '&') : '' ?>month=<?= $monthNumber == 12 ? 1 : $monthNumber + 1 ?>"><i class="bi bi-chevron-right ms-1"></i></a></p>
                <div class="row justify-content-center p-0 mt-1 mx-0">
                    <div class="col-12 calendar p-0 m-0">
                        <?php
                        foreach ($days as $key => $value) { ?>
                            <div class="text-center text-light bg-dark"><?= $value ?></div>
                        <?php }
                        for ($i = 1; $i <= $lines; $i++) { ?>
                            <?= createCase($firstCaseTimestamp, $i, $monthNumber, $arraySpecialDays) ?>
                        <?php }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-11 mb-3 justify-content-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
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
?>