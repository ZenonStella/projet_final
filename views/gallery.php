<?php
session_start();
require_once '../controllers/gallery_controller.php';
require('../inc/header.php');

?>
<h2 class="text-center">Bienvenus sur notre galerie!</h2>
<p class="text-center">Ici vous pourrez trouver les photographie de tout nos chantiers</p>
<div class="row" data-masonry='{"percentPosition": true }'>
    <?php
    foreach ($pictures as $picture) { ?>
        <div class="col-sm-4 col-lg-3 col-6 mb-4">
            <div class="card">
            <a class="example-image-link" href="data:image/png;base64,<?= $picture['g_picture'] ?>" data-lightbox="example-set"><img src="data:image/png;base64,<?= $picture['g_picture'] ?>" alt="<?= $picture['g_name'] ?>"></a>
            </div>
        </div>
    <?php }
    ?>

</div>
<?php
require('../inc/footer.php');

include('../inc/end.php');
?>