<?php
require_once '../controllers/articles_controller.php';
if (isset($_GET['article'])) {
    require('../inc/header.php');
?>
    <div class="page">
        <div class="back">
            <a class="btn btn-danger rounded mb-5" href="actualite.php">Retour à la page des actualités</a>
        </div>
        <div class="article row justify-content-center">
            <?php if (!$thisArticle) { ?>
                <p class="text-center h3">Veuillez sélectionner un article valide</p>
            <?php } else { ?>
                <div class="d-flex mb-5 col-11">
                    <div class="img-article">
                        <img src="data:image/png;base64,<?= $thisArticle['a_img'] ?>" alt="">
                    </div>
                    <div class="text-article ps-2">
                        <h2 class="text-center"><?= $thisArticle['a_titles'] ?></h2>
                        <p class=""><?= $thisArticle['a_preveiw'] ?></p>
                    </div>
                </div>
                <div class="article-content col-11">
                    <p><?= $thisArticle['a_text'] ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
<?php
    require('../inc/footer.php');

    include('../inc/end.php');
} else {
    header('Location: 404.php');
}
