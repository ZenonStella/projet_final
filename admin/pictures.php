<?php
session_start();
require_once '../controllers/admin_news_controller.php';
require('inc/header.php');
?>
<div class="row justify-content-center">
    <div class="galery row" data-masonry='{"percentPosition": true }'>
        <?php foreach ($pictures as $picture) { ?>
            <div class="col-sm-4 col-lg-2 col-3 mb-4">
                <div class="card">
                    <img src="data:image/webp;base64,<?= $picture['g_picture'] ?>" alt="<?= $picture['g_name'] ?>">
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php
require('inc/footer.php');

require('inc/end.php');
