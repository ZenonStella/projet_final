<?php
session_start();
require_once '../controllers/admin_news_controller.php';
require('inc/header.php');
?>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="home.php">Retour à la page d'accueil</a>
    </div>
    <div class="content">
        <div class="edit mb-4">
            <a href="addPictures.php" class="btn greenbtn">Ajouter des images</a>
            <a href="pictures.php" class="btn greenbtn">Voir +</a>
        </div>
        <div class="galery row" data-masonry='{"percentPosition": true }'>
            <?php foreach ($pictures as $picture) { ?>
                <div class="col-sm-4 col-lg-2 col-3 mb-4">
                    <div class="card">
                        <img src="data:image/webp;base64,<?= $picture['g_picture'] ?>" alt="<?= $picture['g_name'] ?>">
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="edit mb-4">
            <a href="addArticles.php" class="btn greenbtn">Ajouter un article</a>
            <a href="articles.php" class="btn greenbtn">Voir +</a>
        </div>
        <div class="news">
            <?php
            foreach ($articles as $article) { ?>
                <div class="card d-flex flex-row">
                    <div class="img-card-admin">
                        <!-- <img src="data:image/webp;base64,<?= $article['a_img'] ?>" alt="<?= $artticle['a_img_name'] ?>"> -->
                    </div>
                    <div class="card-body"><?= $article['a_titles'] ?></div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php
require('inc/footer.php');

require('inc/end.php');
