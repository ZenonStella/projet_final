<?php
session_start();
require_once '../controllers/calendar_controller.php';
require_once '../controllers/devis_controller.php';
include('../inc/header.php');
?>
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="devis.php?steps=0">Active</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="devis.php?steps=1">Etape 1</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="devis.php?steps=2">Etape 2</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="devis.php?steps=3">Etape 3</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="devis.php?steps=4">Etape 4</a>
    </li>
</ul>
<?php if (isset($_GET['steps'])) {
} ?>
<div class="my-3">
    <?php
    if (isset($_GET['steps']) && array_key_exists($_GET['steps'], $steps)) {
        if ($_GET['steps'] == 0) { ?>
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
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#step1-tab-pane" type="button" role="tab" aria-controls="step1-tab-pane" aria-selected="false">Continuer</button>
                    <a href="home.php" class="btn btn-secondary">Annuler</a>
                </div>
            </div>
        <?php }
        if ($_GET['steps'] == 1) { ?>
            <div class="row justify-content-center">
                <h2 class="text-center">Générer votre devis : <br> Les traveaux que vous sohaitez</h2>
                <div class="row flex-row justify-content-evenly flex-wrap">
                    <div class="card col-5 mt-3">
                        <a href="devis.php?steps=2&firstchoice=0">
                            <div class="card-body">
                                <p class="card-title text-black">Gros Oeuvres</p>
                                <div class="img">
                                    <img src="../assets/img/gros-oeuvres.png" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card col-5 mt-3">
                        <a href="devis.php?steps=2&firstchoice=1">
                            <div class="card-body">
                                <p class="card-title text-black">Secondes Oeuvres</p>
                                <div class="img">
                                    <img src="../assets/img/secondes-oeuvres.png" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card col-5 mt-3">
                        <a href="devis.php?steps=2&firstchoice=2">
                            <div class="card-body">
                                <p class="card-title text-black">Espaces verts</p>
                                <div class="img">
                                    <img src="../assets/img/espace-vert.png" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <?php }
        if ($_GET['steps'] == 2) {
            if (isset($_GET['firstchoice']) && array_key_exists($_GET['firstchoice'], $firstChoices)) { ?>
                <div class="row justify-content-center">
                    <h2 class="text-center">Générer votre devis : <br> Les traveaux que vous sohaitez</h2>
                    <form class="row justify-content-center my-5" action="" method="post">
                        <?php foreach ($jobs as $job) { ?>
                            <div class="form-check col-6">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <?php $job['tp_name'] ?>
                                </label>
                            </div>

                            <div class="form-check col-6">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <?php $job['tp_name'] ?>
                                </label>
                                <input type="number" name="" id="">
                                <select name="" id="">
                                    <option value="">--- Choisir une valeur ---</option>
                                    <option value="">m²</option>
                                    <option value="">m</option>
                                    <option value="">Autre</option>
                                </select>
                            </div>
                        <?php } ?>
                    </form>
                </div>
            <?php } else { ?>
                <p>error</p>
            <?php }
        }
        if ($_GET['steps'] == 3) { ?>
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
        <?php }
        if ($_GET['steps'] == 4) { ?>
            <div class="row justify-content-center">
                <h2 class="text-center">Générer votre devis : <br> Les traveaux que vous sohaitez</h2>
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
                        <label for="">Ajouter plus de details pour les traveaux</label>
                        <div class="input-group">
                            <textarea class="form-control" placeholder="Ecrire ici..." aria-label="With textarea" ></textarea>
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
    <?php }
    }
    ?>
</div>

<?php
include('../inc/footer.php');
