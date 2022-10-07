<?php
session_start();
require('inc/header.php');
require_once '../controllers/admin_clients_controller.php';
require_once '../controllers/admin_meets_controller.php';
require_once '../controllers/admin_missives_controller.php';
require_once '../controllers/calendar_controller.php';
?>
<div class="row justify-content-center">
    <div class="col-10 my-3 justify-content-center">
        <p class="h3">Navigez a travers l'administration grâce au menus en haut a droite</p>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <p class="h3 text-center p3">Les messages de nos clients</p>
            <table class="table table-striped rounded border">
                <thead class="green">
                    <tr>
                        <th scope="col">Identité</th>
                        <th scope="col">Rendez-vous</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tenMeets as $meet) { ?>
                        <tr>
                            <td><?= $meet['c_lastname'] ?> <?= $meet['c_firstname'] ?></td>
                            <td class="text-truncate">Le <?= $meet['me_meet_date'] ?> à <?= $meet['me_meet_at'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="meet.php" class="col-6 mt-3 btn greenbtn">Gerer mes rendez-vous <i class="bi bi-calendar3 text-white"></i></a>
        </div>
    </div>
    <!-- <div class="col-11 my-3 justify-content-center">
        <p class="h3 text-center p3">Nos Rendez-vous</p>
        <p class="text-center"><?= $monthLetters ?> <?= $year ?></p>
        <p class="text-center"></p>
        <div class="row justify-content-center p-0 mt-1 mx-0">
            <div class="col-12 calendar p-0 m-0">
                <?php
                foreach ($days as $key => $value) { ?>
                    <div class="text-center text-light greenbg"><?= $value ?></div>
                <?php }
                for ($i = 1; $i <= $lines; $i++) { ?>
                    <?= createCase($firstCaseTimestamp, $i, $monthNumber, $arraySpecialDays) ?>
                <?php }
                ?>
            </div>
            <a href="meet.php" class="col-5 mt-3 btn greenbtn">Gerer mes RDV <i class="bi bi-calendar3 text-white"></i></a>
        </div>
    </div> -->
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <p class="h3 text-center p3">Les messages de nos clients</p>
            <table class="table table-striped rounded border">
                <thead class="green">
                    <tr>
                        <th scope="col">Identité</th>
                        <th scope="col">Messages</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tenMissives as $missive) { ?>
                        <tr>
                            <td><?= $missive['c_lastname'] ?> <?= $missive['c_firstname'] ?></td>
                            <td class="text-truncate"><?= $missive['mi_missive'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="messages.php" class="col-6 mt-3 btn greenbtn">Gerer mes messages <i class="bi bi-chat-left-text-fill text-white"></i></a>
        </div>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <p class="h3 text-center p3">Nos clients</p>
            <table class="table table-striped rounded border">
                <thead class="green">
                    <tr>
                        <th scope="col">Indentité</th>
                        <th scope="col">Contact</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clients as $client) { ?>
                        <tr>
                            <td><?= $client['c_lastname'] ?> <?= $client['c_firstname'] ?></td>
                            <td><?= $client['c_mail'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="clients.php" class="col-6 mt-3 btn greenbtn">Gerer les client <i class="bi bi-people-fill text-white"></i></a>
        </div>
    </div>
</div>
<?php
require('inc/footer.php');
require('inc/end.php');
