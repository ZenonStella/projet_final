<?php
session_start();
require_once '../controllers/admin_news_controller.php';
require('inc/header.php');
if (isset($_GET['id']) && empty($_GET['id'])) {
    
}
?>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="home.php">Retour à la page d'accueil <i class="bi bi-house-fill"></i></a>
        <a class="btn btn-danger rounded mb-5" href="news.php">Retour à la page de gestion de contenus</a>
        <a class="btn btn-danger rounded mb-5" href="articles.php">Retour à la liste des articles</a>
    
    </div>
    <div class="col-10">
        <h2>Ajouter un image existante dans la galerie à l'article</h2>
        <p class="h5">Si une ou des images que vous cherchez n'est pas pressentes, <a href="addPictures.php">entregistrez</a> la avant de revenire sur cette page</p>
        <div class="row" data-masonry='{"percentPosition": true }'>
            <?php foreach ($pictures as $picture) { ?>
                <div class="col-sm-4 col-lg-3 col-6 mb-4">
                    <img src="data:image/webp;base64,<?= $picture['g_picture'] ?>" alt="<?= $picture['g_name'] ?>">
                </div>
            <?php } ?>
        </div>
        <select class="form-select" multiple aria-label="multiple select example">
            <?php foreach ($pictures as $picture) { ?>
                <option value="<?= $picture['g_id'] ?>"><?= $picture['g_name'] ?></option>
            <?php } ?>
        </select>
    </div>
</div>
<?php
require('inc/footer.php');

require('inc/end.php');
