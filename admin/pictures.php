<?php
session_start();
require_once '../controllers/admin_news_controller.php';
require('inc/header.php');
?>
<div class="row justify-content-center">
    <div class="back mb-3">
        <a class="btn btn-danger rounded mb-1" href="home.php">Retour à la page d'accueil <i class="bi bi-house-fill"></i></a>
        <a class="btn btn-danger rounded mb-1" href="news.php">Retour à la page de gestion de contenus</a>
    </div>
    <div class="galery row" data-masonry='{"percentPosition": true }'>
        <?php foreach ($pictures as $picture) { ?>
            <div class="col-sm-4 col-lg-2 col-3 mb-4">
                <div class="card">
                    <a class="example-image-link" href="data:image/png;base64,<?= $picture['g_picture'] ?>" data-lightbox="example-set"><img src="data:image/png;base64,<?= $picture['g_picture'] ?>" alt="<?= $picture['g_name'] ?>"></a>
                </div>
                <!-- <button type="button" class="btn btn-danger my-1" data-bs-toggle="modal" data-bs-target="#picture<?= $picture['g_id'] ?>">
                    Supprimer <i class="bi bi-trash3-fill"></i>
                </button> -->
            </div>
            <!-- <div class="modal fade " id="picture<?= $picture['g_id'] ?>" tabindex="-1" aria-labelledby="picture<?= $picture['g_id'] ?>Label" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header greenbg text-white">
                            <h5 class="modal-title" id="picture<?= $picture['g_id'] ?>Label">Supprimer <?= $picture['g_name'] ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Vous vous apprêtez à supprimer définitivement un image. Voulez-vous continuer ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn greenbtn" data-bs-dismiss="modal">Annuler</button>
                            <a href="delete.php?obj=7&id=<?= $picture['g_id'] ?>" class="btn btn-danger">Supprimer <i class="bi bi-trash3-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div> -->
        <?php } ?>
    </div>
</div>
<?php
require('inc/footer.php');

require('inc/end.php');
