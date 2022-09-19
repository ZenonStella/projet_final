<?php
require('../inc/header.php');

?>
<div class="page">
    <div class="back">
        <a class="btn btn-danger rounded mb-5" href="actualite.php">Retour à la page des actualités</a>
    </div>
    <?php
    // if (isset($_GET['id']) && array_key_exists($_GET['id'], $glaces)) {
    //     $glace = $glaces[$_GET['id']];
    ?>
    <div class="article row justify-content-center">
        <div class="d-flex mb-5 col-11">
            <div class="img-article">
                <img src="../assets/img/torchie.jpg" alt="">
            </div>
            <div class="text-article ps-2">
                <h2 class="text-center">Nom de l'article</h2>
                <p class="">Ici vous pourrez trouver les articles de nos dernièrs chantiers</p>
            </div>
        </div>
        <div class="article-content col-11">
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit numquam nam et illum, corporis vel excepturi reiciendis necessitatibus error ex odit quis officiis iste, aperiam praesentium, maxime amet natus molestiae.
                Aspernatur harum adipisci eius rem dolorum voluptatum similique, ducimus laudantium, beatae id asperiores ipsa magni sequi provident tenetur aliquam eos maxime qui dolor quisquam! Officiis, eum? Quam corporis eum earum.
                Vel cumque eveniet sunt quam itaque asperiores tenetur commodi non accusamus? Maiores aperiam suscipit expedita veritatis saepe cum provident, accusantium deserunt aut autem! Nulla impedit eveniet facilis ipsum, magni facere!
                Tenetur veniam, officiis excepturi veritatis blanditiis illo nesciunt eum deserunt, facere similique quae architecto nostrum dicta iure! Nihil autem nesciunt quisquam omnis deleniti, odio vero iusto impedit cum eveniet ab.
                Facilis pariatur quidem voluptatibus ad ducimus ut voluptates. Ea ullam a numquam, maiores ex, quas nostrum consectetur officia praesentium soluta dolorum pariatur unde aperiam illum! Voluptatem magnam vitae voluptatum a!
            </p>
        </div>
        <?php
        // } else {
        //     // header('Location: 404.php');
        //     // exit();
        //     require('404.php');
        // }
        ?>
    </div>
</div>
<?php
require('../inc/footer.php');

include('../inc/end.php');