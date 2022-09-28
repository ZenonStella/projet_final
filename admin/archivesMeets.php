<?php
session_start();
require_once '../controllers/archives_controller.php';
require('inc/header.php');
?>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="meet.php">Retour à la liste des rendez-vous</a>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <table class="table table-striped rounded border">
                <thead>
                    <tr>
                        <th scope="col">Identité</th>
                        <th scope="col">Rendez-vous</th>
                        <!-- <th scope="col">Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($meets as $meet) { ?>
                        <tr>
                            <td><?= $meet['c_lastname'] ?> <?= $meet['c_firstname'] ?></td>
                            <td><?= $meet['me_meet_date'] ?> à <?= $meet['me_meet_at'] ?></td>
                            <!-- <td>
                                <a href="" class="btn greenbtn">Désarchier</a>
                                <?php if ($_SESSION['user']['u_role'] == 'admin') { ?>
                                    <a href="" class="btn btn-warning">Editer</a>
                                    <a href="" class="btn btn-danger">Supprimer</a>
                                <?php
                                } ?> -->
                            </td>
                        </tr>
                    <?php } { ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
require('inc/footer.php');

require('inc/end.php');
