<?php
session_start();
require_once '../controllers/articles_controller.php';
require('../inc/header.php');

?>
<h2 class="text-center">Bienvenue sur notre Actualité!</h2>
<!-- <p class="text-center"></p> -->

<div class="row justify-content-evenly">
    <?php
    foreach ($articles as $article) {?>
        <div class="card col-lg-3 col-md-5 col-11 p-0 mx-1 my-2">
            <div class="img">
                <img src="data:image/png;base64,<?= $article['a_img'] ?>" class="card-img-top" alt="...">
            </div>
            <div class="card-body p-2 text-center">
                <h5 class="card-title"><?= $article['a_titles'] ?></h5>
                <p class="card-text"><?= $article['a_preveiw'] ?></p>
                <a href="detail_actualite.php?article=<?= $article['a_id'] ?>" class="btn greenbtn">Lire +</a>
            </div>
        </div>
    <?php }
    ?>

</div>
<?php
require('../inc/footer.php');
include('../inc/end.php');
?>