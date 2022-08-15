<?php
require('inc/header.php');
?>
<div class="row justify-content-center">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="home.php">Retour à la page d'accueil</a>
    </div>
    <div class="col-11 my-3">
        <div class="row justify-content-center">
            <table class="table table-striped rounded border">
                <thead>
                    <tr>
                        <th scope="col">Indentité</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < 7; $i++) { ?>
                        <tr>
                            <td>Mark</td>
                            <td><a href="" class="btn btn-info">Voir +</a><a href="" class="btn btn-primary">Modifier</a><a href="" class="btn btn-danger">Supprimer</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="" class="col-6 mt-3 btn btn-secondary">Gerer mes messages</a>
        </div>
    </div>
</div>
<?php
require('inc/footer.php');
