<?php
session_start();
require_once '../controllers/cgu_controller.php';

include('../inc/header.php');
?>
<div class="row justify-content-center">
    <h2 class="text-center">Générer votre devis : <br> Informez-vous avant de commencer</h2>
    <div class="col-11 mb-3">
        <div class="col-11 mb-3 overflow-auto overflow-hidden">
            <p>Un devis est un engagement contractuel entre deux parties difficile à résilier.</p>
            <p>
                Lorsque nous proposons un devis à un client, nous nous engageons à réaliser les travaux indiqués.<br>
                La durée de validité du devis doit être mentionnée sur le papier et correspondre à la durée de validité de l'offre avant son acceptation par le prospect. <br> Généralement, un artisan propose une durée de validité de devis de trois mois en moyenne. Une fois le délai dépassé, le devis n'est plus valable : la durée des travaux, les tarifs... peuvent évoluer.
            </p>
            <p>
                Dès lors que nous proposons un devis à un client, il est considéré comme déjà signé par le professionnel. Une fois que le client appose sa signature, le devis n'a pas de date de fin de validité définie. <br> Toutefois, il pourra être annulé, si nous avons du retard sur les travaux ou si nous avons démarché le client chez lui. Vous vous engagez à verser une avance sur les travaux au moment de la signature. Il devait s’agir des arrhes ou d’un acompte.
            </p>
            <p>
                Pour annuler un devis signé, vous devez envoyer une lettre recommandée avec accusé de réception, datée et signée à l’entreprise.
                Aucune des deux parties ne peut se rétracter et demander son annulation, excepté dans les cas de figure suivants :
            <ul>
                <li>
                    <p>Le client, vous :</p>
                    <ul>
                        <li>
                            Les travaux ont un retard de plus 7 jours et il n'est pas causé par un cas de force majeure comme des intempéries ou une catastrophe naturelle ? Alors comme précisé dans <a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006291889/2011-03-28/">l’article R114-1 du Code de la consommation</a>, vous êtes en droit de réclamer l'annulation du contrat.
                        </li>
                        <li>
                            Si vous avez été démarchés à votre domicile, par téléphone ou encore sur internet, alors vous disposez d’un délai de rétractation de 7 jours et pouvez annuler le devis si vous le souhaitez.
                        </li>
                    </ul>
                </li>
                <li>
                    <p>L’entreprise, nous :</p>
                    <ul>
                        <li>
                            <p>Si vous annulez un devis signé ou nous avez communiqué votre intention de se rétracter
                                Malheureusement, nous avons déjà commandé les fournitures pour les travaux et organisé notre planning. Dans ce cas, nous pouvons récupérer un dédommagement.
                            </p>
                            <ul>
                                <li>
                                    Le paiement d’arrhes : nous conservons les arrhes que vous nous avez versées, mais ne pouvons pas demander de dommages et intérêts.
                                </li>
                                <li>
                                    Le versement d’un acompte : nous conservons l’acompte et nous pouvons vous réclamer des dommages et intérêts.
                                </li>
                            </ul>
                        </li>
                        <li>
                            <p>
                                En cas de force majeur qui peuvent influer sur le bon déroulement des travaux, on retrouve par exemple :
                            </p>
                            <ul>
                                <li>
                                    De mauvaises conditions de travail
                                </li>
                                <li>
                                    Des intempéries graves (inondation, neige, canicule...)
                                </li>
                                <li>
                                    Des grèves qui nous empêchent de nous rendre sur le chantier
                                </li>
                            </ul>
                        </li>
                        <li>
                            <p>
                                Si vous ne collaborez pas au bon dérouler du chantier avec nous :
                            </p>
                            <ul>
                                <li>
                                    Si vous êtes absent pour les rendez-vous ou le jour des travaux
                                </li>
                                <li>
                                    Si vous nous empêche d’accéder au chantier
                                </li>
                                <li>
                                    Si vous demandez régulièrement des modifications sur les prestations
                                </li>
                                <li>
                                    Si vous demandez et insistez pour des prestations supplémentaires non facturées
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <p>
                        Nous serons en droit de rompre le contrat à condition de pouvoir apporter des preuves.
                    </p>
                </li>
            </ul>
            </p>
        </div>
        <form class="col-11 mb-3 justify-content-center" action="" method="POST">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="cgu" name="cgu">
                <label class="form-check-label" for="cgu">
                    En cochant cette case, je certifie avoir pris connaissance et j’accepte les conditions générales d’utilisation
                </label>
            </div>
            <div class="col-7 my-3 justify-content-center">
                <button id="nextSteps1" class="btn greenbtn disabled" aria-disabled="true">Continuer</button>
                <a href="home.php" class="btn btn-secondary">Annuler</a>
            </div>
        </form>
    </div>
</div>
<?php
include('../inc/footer.php'); ?>
<script src="../assets/js/script.js"></script>
<?php
include('../inc/end.php');
