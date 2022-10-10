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
      Fort de nos 10 ans d'expèriences dans differents domaines, l'entreprise <span class="navig">Travaux Service</span> effectue les travaux que vous souhaitez entreprendre en y apportant le plus grand soin, tout en restant a votre écoute.
    </p>
    <p class="">
      Nous proposons une large gamme de service, dont nous sommes fiers de vous les presenter.
    </p>
    <p class="">
      Notre site expose des exemples de réalisations de chantier avant/après qui vous donnera un avant goût de nos talents diversifiés et effectués soigneusement.
    </p>
    <p class="">
      Vous pouvez dès a présent faire une demande de <a href="devis.php">devis gratuit personalisé</a>, prendre <a href="meets.php">rendez-vous</a> avec nous ou encore, nous <a href="missives.php">envoyer un message</a> via l'interface web.
    </p>
    <div class="row mt-5">
      <h3>Les gros oeuvres</h3>
      <div class="flex-shrink-0 col-lg-4">
        <img src="../assets/img/IMG-20220912-WA0000.jpg" alt="...">
      </div>
      <div class="col-lg-8">
        <p class="">
          Vous avez acheté un terrain vide ? Vous voulez une piscine ou une terrasse pour l'été ? Vous voulez rénover un bâtiment existant ? <a href="contact.php">Contactez-nous !</a>
        </p>
        <p class="">
          Nous réalisons l'ensemble de vos travaux de terrassement comme le décapage et les fouilles de votre maison et de vos bâtiments. Nous effectuons également vos allées d'accès, vos parkings, les fondations, la viabilisation de terrain, le drainage, le raccordement au tout-à-l'égout, etc. </p>
        <p class="">
          L'entreprise propose la livraison de gravier, sable ou terre végétale. <br>
          Étant inscrit à la charte de l'assainissement, nous réalisons les assainissements non collectifs comme des fosses avec filtres à sable et des filières compactes, et nous en assurons la mise aux normes. </p>
      </div>
    </div>
    <div class="row mt-5">
      <h3>Les secondes oeuvres</h3>
      <div class="col-lg-8">
        <p class="">
          Refaire la peinture de son intérieur ? Ou bien celle de l'extérieur ? Vous voulez rénover votre bâtiment ? <br>
          Confiez-les-nous !  </p>
        <p class="">
          Vos murs sont fissurés ? Nous réalisons tout le travail de préparation, l'enduit nécessaire avant de travailler dessus. Nous peignons les murs, qu'il s'agisse d'un rafraîchissement, que ce soit en blanc ou en couleurs. <br>
          Votre façade a besoin d'un ravalement ? Faites appel à notre entreprise ! Peinture, crépis, enduit, bardage, etc. <br>
          Nos peintres maitrisent toutes les finitions et utilisent les meilleurs produits existants sur le marché.
        </p>
        <p class="">
          Confiez-nous la rénovation de votre maison ou de votre appartement ! <br>
          Cloisonnement, pose de verrière, rénovation de salle de bain, pose de cuisine, menuiserie sur mesure, plomberie, etc. <br>
          Des petits travaux en urgences à la transformation complète d'un appartement, nous avons les artisans les plus qualifiés pour votre projet.
        </p>
      </div>
      <div class="box-img col-lg-4 box-img-2">
        <img src="../assets/img/facede_torchie.jpg" alt="">
      </div>
    </div>
    <div class="row mt-5">
      <h3>Les espaces verts</h3>
      <div class="flex-shrink-0 col-lg-4">
        <img src="../assets/img/442_view.jpg" alt="...">
      </div>
      <div class="col-lg-8">
        <p class="">
          Que ce soit pour des opérations ponctuelles de taille d haie, d'élagage, de ramassage de feuilles, de tonte, etc.
        </p>
        <p class="">
          Ou bien des prestations similaires du contrat annuel, une équipe de professionnel qualifiés et formés vous sera dédiée pour ces travaux.
        </p>
        <p class="">
          Quel que soit votre besoin en entretien, nous aurons la solution pour y répondre avec nos équipes
        </p>
      </div>
    </div>
  </div>
</div>

<?php
require('../inc/footer.php');

include('../inc/end.php');
