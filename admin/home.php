<?php
session_start();
require('inc/header.php');
require_once '../controllers/admin_cilents_controller.php';
require_once '../controllers/admin_meets_controller.php';
require_once '../controllers/admin_missives_controller.php';
require_once '../controllers/calendar_controller.php';
?>
<div class="row justify-content-center">
    <div class="col-10 my-3 justify-content-center">
        <p class="text-center"><?= $monthLetters ?> <?= $year ?></p>
        <p class="text-center"></p>
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
            <a href="meet.php" class="col-5 mt-3 btn btn-secondary">Gerer mes RDV</a>
        </div>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <table class="table table-striped rounded border">
                <thead>
                    <tr>
                        <th scope="col">Identité</th>
                        <th scope="col">Messages</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tenMissives as $missive) { ?>
                        <tr>
                            <td><?php $missive['c_lastname'] ?> <?php $missive['c_lastname'] ?></td>
                            <td class="text-truncate"><?php $missive['mi_missive'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="messages.php" class="col-6 mt-3 btn btn-secondary">Gerer mes messages</a>
        </div>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <table class="table table-striped rounded border">
                <thead>
                    <tr>
                        <th scope="col">Indentité</th>
                        <th scope="col">Adresse mail</th>
                        <th scope="col">numero de telephone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clients as $client) { ?>
                        <tr>
                            <td><?php $client['c_lastname'] ?> <?php $client['c_firstname'] ?></td>
                            <td><?php $client['c_email'] ?></td>
                            <td><?php $client['c_phone'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="users.php" class="col-6 mt-3 btn btn-secondary">Gerer les utilisateurs</a>
        </div>
    </div>
</div>
<?php
require('inc/footer.php');