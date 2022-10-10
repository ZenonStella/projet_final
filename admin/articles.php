<?php
session_start();
require_once '../controllers/admin_news_controller.php';
require('inc/header.php');
?>
<div class="row justify-content-center">
    <div class="back mb-3">
        <a class="btn btn-danger rounded mb-1" href="home.php">Retour à la page d'accueil <i class="bi bi-house-fill"></i></a>
        <a class="btn btn-danger rounded mb-1" href="news.php">Retour à la page de gestion de contenus</a>
        <?php if ($_SESSION['user']['u_role'] == 'admin' || $_SESSION['user']['u_role'] == 'editeur') { ?>
            <a href="archivesClients.php" class="btn greenbtn mb-1">Archives <i class="bi bi-archive-fill text-white"></i></a>
        <?php } ?>
    </div>
        <?php foreach ($articles as $article) { ?>
            <div class="card card-article-admin">
                <div class="d-flex flex-row">
                    <div class="img-card-admin2">
                        <img src="data:image/png;base64,<?= $article['a_img'] ?>" alt="<?= $artticle['a_img_name'] ?>">
                    </div>
                    <div class="card-body">
                        <p class="h4"><?= $article['a_titles'] ?></p>
                        <p><?= $article['a_preveiw'] ?></p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="details.php?obj=6&id=<?= $article['a_id'] ?>" class="my-1 btn greenbtn">Lire l'article <i class="bi bi-book-fill"></i></a>
                    <?php if ($_SESSION['user']['u_role'] == 'admin' || $_SESSION['user']['u_role'] == 'editeur') { ?>
                        <a href="edit.php?obj=6&id=<?= $article['a_id'] ?>" class="my-1 btn edithbtn">Modifier l'article <i class="bi bi-pencil-fill"></i></a>
                        <a href="selectPictures.php?aricle=<?= $article['a_id'] ?>" class="my-1 btn edithbtn">Ajouter des images a l'article <i class="bi bi-file-earmark-plus-fill"></i></a>
                        <button type="button" class="my-1 btn btn-danger my-1" data-bs-toggle="modal" data-bs-target="#article<?= $article['a_id'] ?>">
                            Supprimer <i class="bi bi-trash3-fill"></i>
                        </button>
                    <?php } ?>
                </div>
                <div class="modal fade " id="article<?= $article['a_id'] ?>" tabindex="-1" aria-labelledby="article<?= $article['a_id'] ?>Label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header greenbg text-white">
                                <h5 class="modal-title" id="article<?= $article['a_id'] ?>Label">Supprimer l'article <?= $article['a_titles'] ?></h5>
                                <button type="button" class="my-1 btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Vous vous apprêtez à supprimer un article. Voulez-vous continuer ?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="my-1 btn greenbtn" data-bs-dismiss="modal">Annuler</button>
                                <a href="soft_delete.php?obj=6&id=<?= $article['a_id'] ?>" class="my-1 btn btn-danger">Supprimer <i class="bi bi-trash3-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
</div>
<?php
require('inc/footer.php');

require('inc/end.php');
