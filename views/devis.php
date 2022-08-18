<?php
session_start();
require_once '../controllers/calendar_controller.php';

include('../inc/header.php');
?>
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="true">Prérequis</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="step2-tab" data-bs-toggle="tab" data-bs-target="#step2-tab-pane" type="button" role="tab" aria-controls="step2-tab-pane" aria-selected="false" >Etape 1</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="step3-tab" data-bs-toggle="tab" data-bs-target="#step3-tab-pane" type="button" role="tab" aria-controls="step3-tab-pane" aria-selected="false" >Etape 2</button>
    </li>
</ul>
<div class="tab-content mt-3" id="myTabContent">
    <div class="tab-pane fade show active" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
        <div class="row justify-content-center">
            <h2 class="text-center">Générer votre devis : <br> Informez-vous avant de commencer</h2>
            <div class="col-11">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim voluptatum nobis, blanditiis quasi incidunt perspiciatis ipsa, quisquam qui reiciendis quas autem, voluptates id debitis fugiat totam similique. Doloremque, delectus iure?
                Deserunt totam adipisci nihil dolore accusantium, sunt quo. Excepturi, distinctio. Sequi, ipsam placeat tempora ab quod dolorem iure debitis quis doloremque doloribus eos corrupti? Numquam voluptates ducimus quia fugit quae?
                Quod, ducimus esse! Libero ab et, dolor ex alias atque voluptatibus, ipsa mollitia aliquam eligendi fugit eveniet aperiam soluta eos, eius expedita dolore iste voluptas nostrum est suscipit ipsum totam?
                Accusantium saepe voluptatibus natus quasi officiis quaerat nobis rerum odio consequatur, accusamus inventore aliquid ducimus! Doloremque blanditiis, voluptatum dolores aspernatur velit repellendus at placeat mollitia omnis, porro ducimus, ipsa voluptate!
                Rerum debitis nihil autem distinctio molestiae. Tempora ratione natus mollitia, itaque non maxime exercitationem aut cupiditate consequuntur ea harum beatae! Sunt rerum minima ratione, et esse maxime vero quis est.
            </div>
            <div class="col-11 justify-content-evenly">
            <button class="nav-link"data-bs-toggle="tab" data-bs-target="#step1-tab-pane" type="button" role="tab" aria-controls="step1-tab-pane" aria-selected="false">Continuer</button>
                <a href="home.php" class="btn btn-secondary">Annuler</a>
            </div>
        </div>
    </div>
    <div class="my-5 tab-pane fade" id="step2-tab-pane" role="tabpanel" aria-labelledby="step2-tab" tabindex="0">
        <div class="row justify-content-center">
            <h2 class="text-center">Générer votre devis : <br> Les traveaux que vous sohaitez</h2>
            <form class="row justify-content-center my-5" action="" method="post">
                <div class="form-check col-6">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Default checkbox
                    </label>
                </div>
                <div class="form-check col-6">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Checked checkbox
                    </label>
                </div>
                <div class="form-check col-6">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Default checkbox
                    </label>
                </div>
                <div class="form-check col-6">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Checked checkbox
                    </label>
                </div>
                <div class="col-11 my-3 text-center">
                    <button class="btn btn-primary" type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
    <div class="my-5 tab-pane fade" id="step3-tab-pane" role="tabpanel" aria-labelledby="step3-tab" tabindex="0">
        <div class="row justify-content-center">
            <h2 class="text-center">Générer votre devis : <br> Prenez rendez-vous pour déterminer les traveaux à réaliser</h2>
            <form class="row justify-content-center my-5" action="" method="post">
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
</div>
<?php
include('../inc/footer.php');
