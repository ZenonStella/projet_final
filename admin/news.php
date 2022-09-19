<?php
session_start();
require('inc/header.php');
?>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="home.php">Retour à la page d'accueil</a>
    </div>
    <div class="content">
        <div class="edit mb-4">
            <a href="addPictures.php" class="btn btn-primary">Ajouter des images</a>
            <a href="" class="btn btn-primary">Voir +</a>
        </div>
        <div class="galery row" data-masonry='{"percentPosition": true }'>
            <?php for ($i = 0; $i < 4; $i++) { ?>
                <div class="col-sm-4 col-lg-2 col-3 mb-4">
                    <div class="card">
                        <img src="../assets/img/facade_en_torchie.jpg" alt="">
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="edit mb-4">
            <a href="" class="btn btn-primary">Ajouter un article</a>
            <a href="" class="btn btn-primary">Voir +</a>
        </div>
        <div class="news">
            <?php for ($i = 0; $i < 4; $i++) { ?>
                <div class="card d-flex flex-row">
                    <div class="img-card-admin">
                        <img src="../assets/img/facade_en_torchie.jpg" alt="">
                    </div>
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php
require('inc/footer.php');

require('inc/end.php');