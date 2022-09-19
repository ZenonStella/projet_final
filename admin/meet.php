<?php
session_start();
require('inc/header.php');
require_once '../controllers/calendar_controller.php';
?>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="home.php">Retour à la page d'accueil</a>
    </div>
    <div class="col-10 my-3 justify-content-center">
        <p class="text-center p-0 m-0"><a class="btn" href="index.php?<?= isset($_GET['month']) ? 'month=' . $_GET['month'] . '&' : '' ?>year=<?= $year - 1 ?>"><i class="bi bi-arrow-left-circle"></i></a><?= $year ?><a class="btn" href="index.php?<?= isset($_GET['month']) ? 'month=' . $_GET['month'] . '&' : '' ?>year=<?= $year + 1 ?>"><i class="bi bi-arrow-right-circle"></i></a></p>
        <p class="text-center p-0 m-0"><a class="btn" href="index.php?<?= isset($_GET['year']) ? ($monthNumber == 1 ? 'year=' . $_GET['year'] - 1 . '&' :  'year=' . $_GET['year'] . '&') : '' ?>month=<?= $monthNumber == 1 ? 12 : $monthNumber - 1 ?>"><i class="bi bi-chevron-left me-1"></i></a><?= $monthLetters ?><a class="btn" href="index.php?<?= isset($_GET['year']) ? ($monthNumber == 12 ? 'year=' . $_GET['year'] + 1 . '&' :  'year=' . $_GET['year'] . '&') : '' ?>month=<?= $monthNumber == 12 ? 1 : $monthNumber + 1 ?>"><i class="bi bi-chevron-right ms-1"></i></a></p>
        <div class="row justify-content-center p-0 mt-1 mx-0">
            <div class="col-12 calendar p-0 m-0">
                <?php
                foreach ($days as $key => $value) { ?>
                    <div class="text-center text-light bg-dark"><?= $value ?></div>
                <?php }
                for ($i = 1; $i <= $lines; $i++) { ?>
                    <?= createCase($firstCaseTimestamp, $i, $monthNumber, $arraySpecialDays) ?>
                <?php }
                ?>
            </div>
        </div>
    </div>
</div>
<?php
require('inc/footer.php');

require('inc/end.php');