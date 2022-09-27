<?php
session_start();
require('../inc/header.php');
?>
<div id="carouselExampleControls" class="carousel slide slider col-11" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active d-flex flex-row">
      <img src="../assets/img/facede_torchie.jpg" class="d-block w-50" alt="">
      <img src="../assets/img/facede_torchie.jpg" class="d-block w-50" alt="">
    </div>
    <div class="carousel-item d-flex flex-row">
      <img src="../assets/img/facade_tirchie-traveaux.jpg" class="d-block w-50" alt="...">
      <img src="../assets/img/facede_torchie.jpg" class="d-block w-50" alt="">
    </div>
    <div class="carousel-item d-flex flex-row">
      <img src="../assets/img/IMG-20220912-WA0001.jpg" class="d-block w-50" alt="...">
      <img src="../assets/img/facede_torchie.jpg" class="d-block w-50" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="row justify-content-center">
  <div class="col-11 my-5">
    <h2>A propos de nous</h2>
    <p class="">
      Fort de nos 10 ans d'expèriences dans differants domaines, l'entreprise <span class="navig">Travaux Service</span> effectue les travaux que vous souhaitez entreprendre en y apportant le plus grand soin, tout en restant a votre écoute.
    </p>
    <p class="">
      Nous proposons une large gamme de service, dont nous sommes fière de vous les presenter.
    </p>
    <p class="">
      Notre site expose des exemples de réalisations de chantier avant/après qui vous donnera un avant goût de nos tallents diversifiés et effectués soigneusement.
    </p>
    <p class="">
      Vous pouvez dés aprésent faire une demande de <a href="devis.php">devis gratuit personalisé</a>, prendre <a href="meets.php">rendez-vous</a> avec nous ou encore nous <a href="missives.php">envoyer un message</a> via l'interface web.
    </p>
    <div class="row">
      <div class="flex-shrink-0 col-lg-4">
        <img src="../assets/img/IMG-20220912-WA0000.jpg" alt="...">
      </div>
      <p class="col-lg-8">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam magnam, tenetur esse eaque suscipit fugit, inventore eos blanditiis eum eveniet ipsa, minima optio aut possimus nihil. Quo provident quod exercitationem.
      </p>
      <p class="col-lg-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam magnam, tenetur esse eaque suscipit fugit, inventore eos blanditiis eum eveniet ipsa, minima optio aut possimus nihil. Quo provident quod exercitationem. </p>
      <p class="col-lg-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam magnam, tenetur esse eaque suscipit fugit, inventore eos blanditiis eum eveniet ipsa, minima optio aut possimus nihil. Quo provident quod exercitationem. </p>
    </div>

    <div class="row">
      <p class="col-lg-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam magnam, tenetur esse eaque suscipit fugit, inventore eos blanditiis eum eveniet ipsa, minima optio aut possimus nihil. Quo provident quod exercitationem. </p>
      <p class="col-lg-8">Reprehenderit earum sequi doloribus voluptatum quis quia dolores aliquam quos obcaecati cumque minus perferendis, delectus amet molestiae rem, esse quidem in, asperiores totam mollitia! Veniam blanditiis natus excepturi minima aspernatur.</p>
      <p class="col-lg-8"> Odio at nulla accusantium nisi quam! Minima necessitatibus ipsam quae voluptatum iusto, reprehenderit ipsa beatae distinctio laboriosam minus debitis hic enim quisquam. Incidunt, minus expedita cupiditate hic consequuntur exercitationem facilis.</p>
      <div class="box-img col-lg-4 box-img-2">
        <img src="../assets/img/facede_torchie.jpg" alt="">
      </div>
    </div>
  </div>
</div>

<?php
require('../inc/footer.php');

include('../inc/end.php');
