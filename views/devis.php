<?php
session_start();
require_once '../controllers/form_controller.php';
require_once '../controllers/devis_controller.php';

include('../inc/header.php');
?>
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="devis.php?steps=0">Active</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="devis.php?steps=1">Etape 1</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="devis.php?steps=2">Etape 2</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="devis.php?steps=3">Etape 3</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="devis.php?steps=4">Etape 4</a>
    </li>
</ul>
<?php if (isset($_GET['steps'])) {
} ?>
<div class="my-3">
    <?php
    if (isset($_GET['steps']) && array_key_exists($_GET['steps'], $steps)) {
        if ($_GET['steps'] == 0) { ?>
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
                            Dès lors que nous proposons un devis à un client, il est considéré comme déjà signé par le professionnel. Une fois que le client appose sa signature, le devis n'a pas de date de fin de validité définie. <br> Toutefois, il pourra être annulé, si nous avons du retard sur les travaux ou si nous avons démarché le client chez lui. Vous vous engagez à versé une avance sur les travaux au moment de la signature. Il devait s’agir des arrhes ou d’un acompte.
                        </p>
                        <p>
                            Pour annuler un devis signé, vous devez envoyer une lettre recommandée avec accusé de réception, datée et signée a l’entreprise.
                            Aucune des deux parties ne peut se rétracter et demander son annulation, excepté dans les cas de figure suivants:
                        <ul>
                            <li>
                                <p>Le client, vous:</p>
                                <ul>
                                    <li>
                                        Les travaux ont un retard de plus 7 jours et n'est pas causé par un cas de force majeure comme des intempéries ou une catastrophe naturelle ? Alors comme précisé dans <a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006291889/2011-03-28/">l’article R114-1 du Code de la consommation</a>, vous êtes en droit de réclamer l'annulation du contrat.
                                    </li>
                                    <li>
                                        Si vous avez été démarché à votre domicile, par téléphone ou encore sur internet, alors vous disposez d’un délai de rétractation de 7 jours et pouvez annuler le devis si vous le souhaitez.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <p>L’entreprise, nous:</p>
                                <ul>
                                    <li>
                                        <p>Si vous annulez un devis signé ou nous avez communiqué votre intention de se rétracter
                                            Malheureusement, nous avons déjà commandé les fournitures pour les travaux et organisé notre planning. Dans ce cas, nous pouvons récupérer un dédommagement.
                                        </p>
                                        <ul>
                                            <li>
                                                Le paiement d’arrhes : nous conservez les arrhes que vous nous avez versées, mais ne pouvons pas demander de dommages et intérêts.
                                            </li>
                                            <li>
                                                Le versement d’un acompte : nous conservons l’acompte et nous pouvons vous réclamer des dommages et intérêts.
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <p>
                                            En cas de force majeur qui peuvent influer sur le bon déroulement des travaux, on retrouve par exemple:
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
                                            Si vous ne collaborez pas au bon dérouler du chantier avec nous:
                                        </p>
                                        <ul>
                                            <li>
                                                Si vous etes absent pour les rendez-vous ou le jour des travaux
                                            </li>
                                            <li>
                                                Sivous nous empêche d’accéder au chantier
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
                    <div class="col-11 mb-3 justify-content-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="cgu" name="cgu">
                            <label class="form-check-label" for="cgu">
                                En cochant cette case, je certifie avoir pris connaissance et j’accepte les conditions générales d’utilisation
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-7 my-3 justify-content-center">
                    <a href="devis.php?steps=1" id="nextSteps1" class="btn btn-primary disabled" aria-disabled="true">Continuer</a>
                    <a href="home.php" class="btn btn-secondary">Annuler</a>
                </div>
            </div>
        <?php }
        if ($_GET['steps'] == 1) { ?>
            <div class="row justify-content-center">
                <h2 class="text-center">Générer votre devis : <br> Choisissez la categorie de traveaux que vous sohaitez</h2>
                <div class="row flex-row justify-content-evenly flex-wrap">
                    <div class="card col-lg-2 col-5 mt-3 py-2">
                        <a href="devis.php?steps=2&firstchoice=0">
                            <div class="card-body p-0">
                                <p class="card-title text-black text-center">Gros Oeuvres</p>
                                <div class="img d-flex justify-content-center">
                                    <svg width="114" height="81" viewBox="0 0 114 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_d_12_57)">
                                            <path d="M21.6791 62.8033H33.199V68.2314H21.6791V62.8033Z" fill="#D9D9D9" />
                                            <path d="M21.9642 54.2324H23.504V59.6606H21.9642V54.2324Z" fill="#D9D9D9" />
                                            <path d="M19.9682 30.8055L23.39 28.52H33.199V33.9482H19.9682V30.8055Z" fill="#D9D9D9" />
                                            <rect x="37.077" y="62.8033" width="13.2308" height="5.42819" fill="#D9D9D9" />
                                            <rect x="37.077" y="28.52" width="13.2308" height="5.42819" fill="#D9D9D9" />
                                            <rect x="54.1857" y="62.8033" width="13.2308" height="5.42819" fill="#D9D9D9" />
                                            <rect x="54.1857" y="28.52" width="13.2308" height="5.42819" fill="#D9D9D9" />
                                            <rect x="71.2946" y="62.8033" width="13.2308" height="5.42819" fill="#D9D9D9" />
                                            <rect x="71.2946" y="28.52" width="13.2308" height="5.42819" fill="#D9D9D9" />
                                            <rect x="30.2335" y="54.2324" width="13.2308" height="5.42819" fill="#D9D9D9" />
                                            <rect x="27.382" y="37.0908" width="13.2308" height="5.42819" fill="#D9D9D9" />
                                            <path d="M30.2335 23.6632L35.3661 19.9491H43.4642V25.3773H30.2335V23.6632Z" fill="#D9D9D9" />
                                            <rect x="47.3422" y="54.2324" width="13.2308" height="5.42819" fill="#D9D9D9" />
                                            <rect x="44.4908" y="37.0908" width="13.2308" height="5.42819" fill="#D9D9D9" />
                                            <rect x="47.3422" y="19.9491" width="13.2308" height="5.42819" fill="#D9D9D9" />
                                            <rect x="64.451" y="54.2324" width="13.2308" height="5.42819" fill="#D9D9D9" />
                                            <rect x="61.5995" y="37.0908" width="13.2308" height="5.42819" fill="#D9D9D9" />
                                            <path d="M64.451 19.9491H72.15L77.6818 23.6632V25.3773H64.451V19.9491Z" fill="#D9D9D9" />
                                            <path d="M21.9642 45.6616H33.199V51.0898H21.9642V45.6616Z" fill="#D9D9D9" />
                                            <path d="M10.2732 38.2336L11.6989 37.0908H23.504V42.519H10.2732V38.2336Z" fill="#D9D9D9" />
                                            <path d="M4 42.519L6.39523 40.5191V42.519H4Z" fill="#D9D9D9" />
                                            <rect x="37.077" y="45.6616" width="13.2308" height="5.42819" fill="#D9D9D9" />
                                            <path d="M47.9126 11.3783H50.3078V16.8065H39.6433L47.9126 11.3783Z" fill="#D9D9D9" />
                                            <rect x="54.1857" y="45.6616" width="13.2308" height="5.42819" fill="#D9D9D9" />
                                            <path d="M54.1857 11.3783H61.0292L67.4165 16.8065H54.1857V11.3783Z" fill="#D9D9D9" />
                                            <rect x="71.2946" y="45.6616" width="13.2308" height="5.42819" fill="#D9D9D9" />
                                            <path d="M52.76 7.6643L54.1858 6.80722L55.3264 7.6643L57.6075 9.66416H50.1937L52.76 7.6643Z" fill="#D9D9D9" />
                                            <path d="M75.0015 21.6633L104.942 41.9476H88.1182V68.5171H75.0015V66.5173L73.9611 58.8037C73.707 56.9201 73.8524 55.0041 74.3878 53.1804L74.717 52.0589C74.9054 51.417 75.1953 50.8093 75.5756 50.2588V50.2588C76.8138 48.467 77.0345 46.1614 76.1587 44.1672L72.1621 35.0665C71.59 33.7637 71.2946 32.3564 71.2946 30.9336V30.9336C71.2946 29.164 71.7514 27.4245 72.6208 25.8833L75.0015 21.6633Z" fill="#1E1E1E" />
                                        </g>
                                        <g filter="url(#filter1_d_12_57)">
                                            <path d="M80.2231 43.5512L84.849 42.7076L90.1694 57.2027L80.2231 58.6523L80.2231 43.5512Z" fill="#ACABAB" />
                                            <path d="M84.8838 58.1807C84.8109 57.8523 85.0179 57.5267 85.3463 57.4534V57.4534C85.6747 57.3802 86.0001 57.5871 86.0731 57.9155L86.6079 60.3233C86.71 60.7829 86.6467 61.264 86.4292 61.6817L86.2279 62.0682C86.0104 62.486 85.9471 62.967 86.0492 63.4266L86.4363 65.1692C86.5366 65.6208 86.2519 66.0686 85.8004 66.1693V66.1693C85.3489 66.27 84.9015 65.9855 84.8012 65.5339L84.256 63.0797V63.0797C84.058 62.1884 84.2889 61.2556 84.8799 60.5593L84.9132 60.52C85.158 60.2316 85.2536 59.8452 85.1716 59.476L84.8838 58.1807Z" fill="#ACABAB" />
                                            <rect width="3.617" height="8.1062" rx="1.8085" transform="matrix(0.988257 -0.152799 0.152227 0.988346 83.4783 64.2782)" fill="#ACABAB" />
                                        </g>
                                        <g filter="url(#filter2_d_12_57)">
                                            <path d="M71.8113 25.8327C69.1718 26.7649 68.0284 28.9731 67.1913 31.2676C66.4505 33.2981 66.0397 35.7401 66.1239 38.3512C66.1441 38.9791 66.3117 39.7262 66.0975 40.1476C66.1393 40.1899 66.1783 40.1184 66.2059 40.0952C66.5149 39.8337 66.8403 39.5219 67.1002 39.2524C66.7313 36.2232 67.0952 33.3954 67.8389 31.1058C68.558 28.8917 69.7008 26.9028 71.8134 25.8515C71.8791 25.8582 71.9172 25.8094 71.83 25.8303C71.8238 25.8311 71.8176 25.8319 71.8113 25.8327ZM65.8862 39.6223C65.8955 39.2343 65.8094 38.8541 65.7969 38.4897C65.7088 35.9079 66.0701 33.7075 66.7043 31.6751C67.3928 29.4697 68.4423 27.4414 70.3098 26.1833C70.3625 26.1479 70.4844 26.0953 70.4303 26.0721C69.1834 26.5602 68.1405 27.3649 67.2883 28.2411C65.5786 29.9991 64.4074 32.2326 63.7784 34.7503C63.486 35.9206 63.3098 37.0909 63.3595 38.4677C63.3667 38.664 63.4184 38.8796 63.4105 39.0904C63.3993 39.3965 63.2157 39.6491 63.2078 39.9945C64.0562 40.1279 64.848 40.3336 65.6961 40.4675C65.7147 40.1464 65.8794 39.917 65.8862 39.6223ZM63.2754 35.5223C64.1182 31.6225 65.8878 28.4478 69.0769 26.3841C69.073 26.3562 69.1851 26.3422 69.0913 26.344C65.3436 27.9762 63.4535 31.1537 63.2754 35.5223ZM75.7075 38.8232C77.6633 38.4051 79.652 37.8024 81.0438 36.8796C81.4791 36.5911 82.0398 36.1597 82.1062 35.6714C82.1343 35.4658 82.061 35.1479 82.0131 34.8445C81.399 30.9387 79.7269 28.2632 77.2294 26.8159C77.0379 26.7048 76.8317 26.5514 76.681 26.5066C76.5909 26.4799 76.4825 26.4949 76.3914 26.4685C76.1463 26.3975 75.9127 26.2696 75.6743 26.1816C74.9512 25.9144 74.1173 25.6995 73.0864 25.8363C72.3146 25.9385 71.674 26.2409 71.1564 26.6057C69.6972 27.6345 68.8323 29.2831 68.2427 30.9763C67.3785 33.4583 67.0926 36.2171 67.4234 39.4195C67.409 39.4479 67.2799 39.5316 67.3591 39.5233C69.826 39.7272 72.8962 39.4241 75.7075 38.8232ZM74.0753 40.7168C76.8554 40.3206 79.6483 39.5763 81.6421 38.4792C82.3078 38.113 83.0089 37.6703 83.1626 36.9435C83.0303 36.7792 82.7835 36.6817 82.6016 36.5216C82.4423 36.3814 82.3238 36.2149 82.1884 36.0611C81.6684 36.8886 80.4822 37.5014 79.302 37.9676C75.8928 39.3145 70.7831 40.0233 67.1136 39.7083C66.9067 39.8931 66.7286 40.0764 66.4937 40.2861C66.3591 40.4063 66.0108 40.7955 65.8322 40.831C65.6899 40.8594 65.4486 40.7619 65.2883 40.731C64.7063 40.6188 64.1585 40.4997 63.6379 40.4338C66.3323 41.4232 70.1754 41.2727 74.0753 40.7168ZM62.7281 39.6191C62.7694 39.7239 62.799 39.8437 62.8909 39.8838C62.9024 39.6641 63.0204 39.4367 63.0108 39.2576C62.9412 39.3973 62.8044 39.4846 62.7281 39.6191ZM61.0914 41.3037C60.9547 41.4555 60.7118 41.6695 60.7339 41.8467C60.7644 42.0912 61.1805 42.2414 61.4367 42.3454C62.2892 42.6911 63.234 42.8517 64.2106 42.9904C65.5448 43.1797 66.8512 43.4086 68.1862 43.496C68.8955 43.5425 69.7409 43.5337 70.4235 43.4301C71.1933 43.313 71.7487 43.0107 72.339 42.7005C73.4971 42.0922 74.5979 41.4459 75.6045 40.7823C72.1984 41.4315 68.4323 41.7149 65.5784 41.2843C64.3373 41.097 63.0533 40.7982 62.4511 39.8655C61.984 40.3065 61.5412 40.8032 61.0914 41.3037Z" fill="#ACABAB" />
                                        </g>
                                        <g filter="url(#filter3_d_12_57)">
                                            <path d="M25.8022 22.7575C25.2374 21.6964 25.5451 20.3811 26.5219 19.6807L53.9006 0.0484847L108.896 40.8234C109.929 41.5889 109.966 43.1213 108.972 43.9362V43.9362C108.278 44.5054 107.287 44.5345 106.56 44.0068L58.5598 9.14611C55.7808 7.12789 52.0191 7.12608 49.2383 9.14161L29.3277 23.5727C28.1487 24.4272 26.4864 24.0428 25.8022 22.7575V22.7575Z" fill="#ACABAB" />
                                        </g>
                                        <g filter="url(#filter4_d_12_57)">
                                            <rect width="6.27322" height="38.3936" rx="3.13661" transform="matrix(0.999886 -0.015097 0.0150392 0.999887 24.9933 18.7124)" fill="#ACABAB" />
                                        </g>
                                        <g filter="url(#filter5_d_12_57)">
                                            <path d="M47.0592 65.2426C42.7899 70.4731 35.3294 71.7778 29.5408 68.3062V68.3062L26.5813 66.4031C21.4633 63.1118 20.3513 56.0975 24.2001 51.3822V51.3822L58.3966 51.3526L47.0592 65.2426Z" fill="#ACABAB" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_d_12_57" x="0" y="6.80722" width="108.942" height="69.7099" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dy="4" />
                                                <feGaussianBlur stdDeviation="2" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_57" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_57" result="shape" />
                                            </filter>
                                            <filter id="filter1_d_12_57" x="76.2231" y="42.7076" width="17.9464" height="37.3275" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dy="4" />
                                                <feGaussianBlur stdDeviation="2" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_57" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_57" result="shape" />
                                            </filter>
                                            <filter id="filter2_d_12_57" x="56.7325" y="25.7938" width="30.4301" height="25.7291" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dy="4" />
                                                <feGaussianBlur stdDeviation="2" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_57" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_57" result="shape" />
                                            </filter>
                                            <filter id="filter3_d_12_57" x="21.5207" y="0.0484772" width="92.174" height="52.3352" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dy="4" />
                                                <feGaussianBlur stdDeviation="2" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_57" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_57" result="shape" />
                                            </filter>
                                            <filter id="filter4_d_12_57" x="21.0401" y="18.6647" width="14.7563" height="46.39" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dy="4" />
                                                <feGaussianBlur stdDeviation="2" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_57" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_57" result="shape" />
                                            </filter>
                                            <filter id="filter5_d_12_57" x="17.9014" y="51.3526" width="44.4951" height="26.8891" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dy="4" />
                                                <feGaussianBlur stdDeviation="2" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_57" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_57" result="shape" />
                                            </filter>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card col-lg-2 col-5 mt-3 py-2">
                        <a href="devis.php?steps=2&firstchoice=1">
                            <div class="card-body p-0">
                                <p class="card-title text-black text-center">Secondes Oeuvres</p>
                                <div class="img d-flex justify-content-center">
                                    <svg width="114" height="84" viewBox="0 0 114 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_d_12_56)">
                                            <path d="M22.5392 58.6469H34.6196V64.3321H22.5392V58.6469Z" fill="#D9D9D9" />
                                            <path d="M22.8383 49.6704H24.453V55.3555H22.8383V49.6704Z" fill="#D9D9D9" />
                                            <path d="M20.7451 25.1344L24.3334 22.7406H34.6196V28.4258H20.7451V25.1344Z" fill="#D9D9D9" />
                                            <rect x="38.6863" y="58.6469" width="13.8745" height="5.68516" fill="#D9D9D9" />
                                            <rect x="38.6863" y="22.7406" width="13.8745" height="5.68516" fill="#D9D9D9" />
                                            <rect x="56.6275" y="58.6469" width="13.8745" height="5.68516" fill="#D9D9D9" />
                                            <rect x="56.6275" y="22.7406" width="13.8745" height="5.68516" fill="#D9D9D9" />
                                            <rect x="74.5687" y="58.6469" width="13.8745" height="5.68516" fill="#D9D9D9" />
                                            <rect x="74.5687" y="22.7406" width="13.8745" height="5.68516" fill="#D9D9D9" />
                                            <rect x="31.5098" y="49.6704" width="13.8745" height="5.68516" fill="#D9D9D9" />
                                            <rect x="28.5196" y="31.7172" width="13.8745" height="5.68516" fill="#D9D9D9" />
                                            <path d="M31.5098 17.6539L36.8922 13.7641H45.3843V19.4492H31.5098V17.6539Z" fill="#D9D9D9" />
                                            <rect x="49.451" y="49.6704" width="13.8745" height="5.68516" fill="#D9D9D9" />
                                            <rect x="46.4608" y="31.7172" width="13.8745" height="5.68516" fill="#D9D9D9" />
                                            <rect x="49.451" y="13.7641" width="13.8745" height="5.68516" fill="#D9D9D9" />
                                            <rect x="67.3922" y="49.6704" width="13.8745" height="5.68516" fill="#D9D9D9" />
                                            <rect x="64.402" y="31.7172" width="13.8745" height="5.68516" fill="#D9D9D9" />
                                            <path d="M67.3922 13.7641H75.4657L81.2667 17.6539V19.4492H67.3922V13.7641Z" fill="#D9D9D9" />
                                            <path d="M22.8383 40.6938H34.6196V46.379H22.8383V40.6938Z" fill="#D9D9D9" />
                                            <path d="M10.5784 32.9141L12.0735 31.7172H24.4529V37.4024H10.5784V32.9141Z" fill="#D9D9D9" />
                                            <path d="M4 37.4024L6.51177 35.3079V37.4024H4Z" fill="#D9D9D9" />
                                            <rect x="38.6863" y="40.6938" width="13.8745" height="5.68516" fill="#D9D9D9" />
                                            <path d="M50.049 4.78751H52.5608V10.4727H41.3774L50.049 4.78751Z" fill="#D9D9D9" />
                                            <rect x="56.6275" y="40.6938" width="13.8745" height="5.68516" fill="#D9D9D9" />
                                            <path d="M56.6275 4.78751H63.804L70.502 10.4727H56.6275V4.78751Z" fill="#D9D9D9" />
                                            <rect x="74.5687" y="40.6938" width="13.8745" height="5.68516" fill="#D9D9D9" />
                                            <path d="M55.1324 0.897657L56.6275 0L57.8236 0.897657L60.2157 2.99219H52.4412L55.1324 0.897657Z" fill="#D9D9D9" />
                                            <path d="M78.4559 15.5594L109.853 36.8039H92.2108V64.6313H78.4559V62.5368L77.365 54.4588C77.0986 52.4856 77.251 50.4783 77.8125 48.5679L78.1576 47.3939C78.3552 46.7216 78.6591 46.0852 79.0578 45.509V45.509C80.3561 43.6324 80.5875 41.2165 79.669 39.1276L75.4782 29.5967C74.8784 28.2326 74.5687 26.7586 74.5687 25.2684V25.2684C74.5687 23.4152 75.0476 21.5935 75.959 19.9799L78.4559 15.5594Z" fill="#1E1E1E" />
                                            <path d="M32.6216 20.2306C32.8768 19.8475 33.4184 19.7938 33.7438 20.1194L47.6684 34.0532L35.9516 45.7778V45.7778C33.898 47.7643 30.6323 47.7366 28.6127 45.7156L21.6469 38.7452C19.6507 36.7477 19.5953 33.5267 21.5214 31.4615V31.4615L32.6216 20.2306V20.2306Z" fill="#ACABAB" />
                                            <path d="M21.1953 26.7635L21.1803 26.6509C21.0325 25.5417 21.3505 24.4208 22.0587 23.5547V23.5547V23.5547C22.4644 22.905 23.0128 22.3563 23.662 21.9503V21.9503V21.9503C24.5617 21.3773 25.5395 20.9375 26.5649 20.6443L26.7454 20.5927L27.2802 20.4398C28.0732 20.2131 28.8848 20.0577 29.7054 19.9756V19.9756L31.1854 19.8522L32.2954 19.8522C32.6957 19.8522 33.0852 19.9821 33.4054 20.2224V20.2224L30.4454 22.5674V22.5674C30.1202 22.486 29.7815 22.475 29.4517 22.535L28.5954 22.6908L27.2387 23.061V23.061C26.4268 23.2235 25.6615 23.5659 24.9991 24.063L24.5253 24.4186L24.4112 24.5165C23.9357 24.9244 23.662 25.5198 23.662 26.1464V26.1464V26.1464C23.5846 26.8437 23.8477 27.5355 24.3688 28.0048L24.772 28.3679L23.0453 30.0958L22.9601 30.0236C21.9839 29.197 21.3539 28.0333 21.1953 26.7635V26.7635Z" fill="#ACABAB" />
                                            <path d="M46.9284 34.6703L47.545 33.9298L39.775 26.1546L41.1316 26.6483L42.8583 27.5122L43.286 27.7737C44.4791 28.5033 45.6144 29.3236 46.6817 30.2273V30.2273L47.7917 31.3381L48.7784 32.4488V32.4488C49.4349 33.4343 50.0036 34.4755 50.4779 35.5604L50.6284 35.9045L51.1217 37.7558L51.2451 39.7304L51.1217 42.1988V42.1988C51.1217 43.0199 51.0479 43.8393 50.9011 44.6472L50.8751 44.7905L50.5125 45.9697C50.4258 46.2517 50.2986 46.5196 50.1351 46.7652V46.7652V46.7652C49.9675 47.0446 49.5626 47.0446 49.3951 46.7652V46.7652L49.1484 46.0247L48.9017 44.7905V43.3727C48.9017 42.8384 48.8453 42.3056 48.7334 41.7831L48.6839 41.5516C48.5828 41.0799 48.4226 40.6228 48.207 40.1912L48.0986 39.9743C47.8953 39.5676 47.6278 39.1962 47.3064 38.8745L47.2388 38.8069C46.7139 38.2816 46.05 37.917 45.325 37.7558V37.7558L45.313 37.7534C44.9109 37.6729 44.5018 37.6323 44.0917 37.6323V37.6323L46.9284 34.6703Z" fill="#ACABAB" />
                                            <g filter="url(#filter1_d_12_56)">
                                                <path d="M24.7282 28.3761L26.4549 29.3634L26.6833 29.4287C28.2551 29.8781 29.8609 30.1981 31.4847 30.3856L32.2516 30.4742L33.8549 30.4742L34.1482 30.2341C34.7952 29.7043 35.7036 29.6096 36.4514 29.9838V29.9838C36.6095 30.0628 36.7585 30.1634 36.8906 30.2809V30.2809C37.4506 30.779 37.6877 31.5472 37.506 32.2746L37.4791 32.3822C37.4475 32.5085 37.4023 32.631 37.344 32.7475V32.7475C37.1613 33.1132 36.8587 33.4051 36.4867 33.5743L36.2516 33.6812C35.8962 33.8429 35.4989 33.8886 35.1161 33.812V33.812C34.699 33.7285 34.3231 33.5047 34.0508 33.1778L33.8549 32.9425L33.2382 32.9425L30.0315 32.6957L27.4415 32.202L25.2215 31.4615L23.0015 30.1039L24.7282 28.3761Z" fill="#ACABAB" />
                                            </g>
                                            <g filter="url(#filter2_d_12_56)">
                                                <path d="M14.4425 46.5006C14.126 46.5006 13.8695 46.244 13.8695 45.9276V45.9276L13.8695 43.178V43.178C13.8695 42.7984 14.1772 42.4906 14.5568 42.4906L14.7854 42.4906L26.0052 42.4906L26.4627 42.4906C26.8423 42.4906 27.1501 42.7984 27.1501 43.178V43.178L27.1501 45.9276V45.9276C27.0118 46.2736 26.6767 46.5006 26.304 46.5006L24.0582 46.5006L24.0582 63.4848C24.0582 64.0708 24.1752 64.6508 24.4024 65.191V65.191L52.1085 65.4201L52.1085 63.1288V63.1288C52.1085 62.6768 52.4748 62.3104 52.9268 62.3104L55.3007 62.3104C55.7527 62.3104 56.1191 62.6768 56.1191 63.1288V63.1288L56.1191 74.9125L56.1153 74.9273C56.048 75.1883 55.8127 75.3708 55.5431 75.3708V75.3708L52.7954 75.3708L52.5667 75.3708C52.3136 75.3708 52.1085 75.1656 52.1085 74.9125V74.9125L52.1085 72.5231L38.5989 72.5231L24.8581 72.5231C23.6537 72.5231 22.4646 72.2532 21.3781 71.7332V71.7332C19.1005 70.6432 17.4651 68.5489 16.9598 66.0749L16.8462 65.5182L16.8462 46.5006L14.5564 46.5006L14.4425 46.5006Z" fill="#9CE7FF" />
                                                <path d="M61.2675 74.9125C61.2675 75.1655 61.0625 75.3708 60.8095 75.3708V75.3708L57.8328 75.3708V75.3708C57.5799 75.3708 57.3749 75.1658 57.3749 74.9129L57.3749 62.9978V62.9978C57.3749 62.6185 57.6825 62.3105 58.0619 62.3105V62.3105L60.5806 62.3105L61.2675 62.3105L61.2675 62.9978V62.9978C61.2675 64.2633 62.2934 65.2891 63.5588 65.2891L72.0294 65.2891L88.1478 65.0712C88.6647 65.0642 89.145 64.8029 89.4316 64.3726V64.3726L89.4767 46.473L87.187 46.4596V46.4596C86.7353 46.4569 86.3713 46.0886 86.3739 45.637L86.3879 43.2593C86.3905 42.8077 86.7588 42.4437 87.2104 42.4463V42.4463L98.9861 42.5153L99.0003 42.5191C99.2611 42.588 99.4423 42.8246 99.4407 43.0944V43.0944L99.4246 45.8439L99.4233 46.0733C99.4218 46.3262 99.2155 46.5301 98.9626 46.5286V46.5286L96.5748 46.5146L96.4957 60.033L96.4957 64.212C96.4957 64.927 96.4027 65.6391 96.219 66.3301V66.3301C95.5501 68.8471 93.7315 70.9001 91.3137 71.8679L89.4316 72.6212L61.2675 72.3921L61.2675 74.9125V74.9125Z" fill="#9CE7FF" />
                                                <rect width="13.6041" height="3.20856" transform="matrix(0.733792 -0.679135 0.678874 0.734477 83.4173 39.0988)" fill="#D9D9D9" />
                                                <path d="M77.0992 32.2061L78.6969 30.9615L83.5137 36.1621C83.5873 36.2416 83.7126 36.2426 83.7874 36.1642V36.1642C83.8544 36.094 83.8569 35.9842 83.7932 35.911L79.1604 30.5832L79.9288 29.7778L84.824 34.946C84.9359 35.0642 85.1277 35.0509 85.2223 34.9185V34.9185C85.2936 34.8185 85.2849 34.6822 85.2015 34.592L80.3923 29.3995L81.2094 28.4355L86.1047 33.6037C86.2166 33.7219 86.4084 33.7086 86.5029 33.5762V33.5762C86.5743 33.4762 86.5656 33.3398 86.4821 33.2497L81.6729 28.0572L82.5999 27.3007L87.3619 32.4423C87.469 32.5579 87.6474 32.5704 87.7695 32.4708V32.4708C87.903 32.3618 87.9168 32.1627 87.7997 32.0363L83.0633 26.9224L84.0391 26.0072L88.7773 31.1231C88.8879 31.2426 89.0802 31.2303 89.1748 31.0979V31.0979C89.2457 30.9986 89.237 30.8631 89.1541 30.7737L84.344 25.5801L85.2709 24.8236L90.1661 29.9918C90.2781 30.1099 90.4699 30.0967 90.5644 29.9642V29.9642C90.6357 29.8643 90.627 29.7279 90.5436 29.6378L85.7344 24.4453L87.1736 23.1518L93.1726 29.5344L83.1906 38.7727L77.0992 32.2061Z" fill="#D9D9D9" />
                                                <path d="M86.9606 40.7766L95.0178 33.4612V33.4612C95.6851 33.9435 96.0619 34.7321 96.0179 35.5546L96.0154 35.6019L95.3916 37.6309C95.1623 38.3769 95.1588 39.1742 95.3815 39.9223V39.9223L96.833 41.4117L97.237 41.656C97.7464 41.9641 98.2915 42.2085 98.8603 42.3837L98.9712 42.4179C99.6951 42.641 100.375 42.9869 100.982 43.4406V43.4406C101.681 43.9632 102.27 44.6191 102.714 45.3705L102.964 45.7929C103.186 46.1671 103.36 46.5669 103.484 46.9835L103.648 47.5325C103.755 47.8916 103.784 48.2692 103.734 48.6406V48.6406C103.696 48.9302 103.609 49.2114 103.479 49.4728L103.225 49.9811L103.045 50.1368C102.421 50.6775 101.562 50.8583 100.773 50.6151V50.6151L99.3461 50.1754L98.8112 49.8519C98.0041 49.3638 97.296 48.7281 96.7237 47.9779V47.9779V47.9779C96.0358 46.8441 95.5086 45.6202 95.1573 44.3414L95.1135 44.1818L94.8657 43.7135C94.5208 43.0616 94.0732 42.4695 93.54 41.9601V41.9601L93.4279 41.9073C92.8038 41.6128 92.1197 41.4677 91.4299 41.4836V41.4836L89.137 42.1666V42.1666C88.2769 42.2183 87.4671 41.7576 87.0716 40.9914L86.9606 40.7766Z" fill="#D9D9D9" />
                                            </g>
                                        </g>
                                        <defs>
                                            <filter id="filter0_d_12_56" x="0" y="0" width="116" height="84" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dy="4" />
                                                <feGaussianBlur stdDeviation="2" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_56" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_56" result="shape" />
                                            </filter>
                                            <filter id="filter1_d_12_56" x="19.0015" y="28.3761" width="22.5647" height="13.4721" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dy="4" />
                                                <feGaussianBlur stdDeviation="2" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_56" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_56" result="shape" />
                                            </filter>
                                            <filter id="filter2_d_12_56" x="9.86945" y="23.1518" width="97.8885" height="60.219" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dy="4" />
                                                <feGaussianBlur stdDeviation="2" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_56" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_56" result="shape" />
                                            </filter>
                                        </defs>
                                    </svg>

                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card col-lg-2 col-5 mt-3 py-2">
                        <a href="devis.php?steps=2&firstchoice=2">
                            <div class="card-body p-0">
                                <p class="card-title text-black text-center">Espaces verts</p>
                                <div class="img d-flex justify-content-center">
                                    <svg width="124" height="79" viewBox="0 0 124 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_d_12_55)">
                                            <path d="M27.4536 64.5263H40.2579V70.5361H27.4536V64.5263Z" fill="#D9D9D9" />
                                            <path d="M27.7705 55.0371H29.482V61.0469H27.7705V55.0371Z" fill="#D9D9D9" />
                                            <path d="M25.5519 29.1001L29.3552 26.5697H40.2579V32.5795H25.5519V29.1001Z" fill="#D9D9D9" />
                                            <rect x="44.5683" y="64.5263" width="14.706" height="6.0098" fill="#D9D9D9" />
                                            <rect x="44.5683" y="26.5697" width="14.706" height="6.0098" fill="#D9D9D9" />
                                            <rect x="63.5847" y="64.5263" width="14.706" height="6.0098" fill="#D9D9D9" />
                                            <rect x="63.5847" y="26.5697" width="14.706" height="6.0098" fill="#D9D9D9" />
                                            <rect x="82.6011" y="64.5263" width="14.706" height="6.0098" fill="#D9D9D9" />
                                            <rect x="82.6011" y="26.5697" width="14.706" height="6.0098" fill="#D9D9D9" />
                                            <rect x="36.9618" y="55.0371" width="14.706" height="6.0098" fill="#D9D9D9" />
                                            <rect x="33.7924" y="36.0588" width="14.706" height="6.0098" fill="#D9D9D9" />
                                            <path d="M36.9618 21.1925L42.6667 17.0805H51.6678V23.0903H36.9618V21.1925Z" fill="#D9D9D9" />
                                            <rect x="55.9781" y="55.0371" width="14.706" height="6.0098" fill="#D9D9D9" />
                                            <rect x="52.8087" y="36.0588" width="14.706" height="6.0098" fill="#D9D9D9" />
                                            <rect x="55.9781" y="17.0805" width="14.706" height="6.0098" fill="#D9D9D9" />
                                            <rect x="74.9945" y="55.0371" width="14.706" height="6.0098" fill="#D9D9D9" />
                                            <rect x="71.8251" y="36.0588" width="14.706" height="6.0098" fill="#D9D9D9" />
                                            <path d="M74.9945 17.0805H83.5519L89.7005 21.1925V23.0903H74.9945V17.0805Z" fill="#D9D9D9" />
                                            <path d="M27.7705 45.548H40.2579V51.5578H27.7705V45.548Z" fill="#D9D9D9" />
                                            <path d="M14.776 37.324L16.3607 36.0588H29.482V42.0686H14.776V37.324Z" fill="#D9D9D9" />
                                            <path d="M7.80328 42.0686L10.4656 39.8545V42.0686H7.80328Z" fill="#D9D9D9" />
                                            <rect x="44.5683" y="45.548" width="14.706" height="6.0098" fill="#D9D9D9" />
                                            <path d="M56.612 7.59132H59.2743V13.6011H47.4208L56.612 7.59132Z" fill="#D9D9D9" />
                                            <rect x="63.5847" y="45.548" width="14.706" height="6.0098" fill="#D9D9D9" />
                                            <path d="M63.5847 7.59132H71.1913L78.2907 13.6011H63.5847V7.59132Z" fill="#D9D9D9" />
                                            <rect x="82.6011" y="45.548" width="14.706" height="6.0098" fill="#D9D9D9" />
                                            <path d="M62 3.47936L63.5847 2.53044L64.8525 3.47936L67.388 5.6935H59.1476L62 3.47936Z" fill="#D9D9D9" />
                                            <path d="M86.7213 18.9783L120 41.436H101.301V70.8524H86.7213V68.6383L85.5653 60.1009C85.2827 58.0139 85.4444 55.8907 86.0397 53.8705L86.4051 52.6306C86.6146 51.92 86.9366 51.2475 87.3588 50.6388V50.6388C88.7348 48.6553 88.98 46.0989 88.0061 43.8901L83.5648 33.8164C82.9293 32.375 82.6011 30.817 82.6011 29.2416V29.2416C82.6011 27.2829 83.1085 25.3575 84.0737 23.6531L86.7213 18.9783Z" fill="#1E1E1E" />
                                        </g>
                                        <g filter="url(#filter1_d_12_55)">
                                            <path d="M22.6995 45.5481L22.6995 32.5795L24.2842 29.1002L32.5246 19.2947L36.3279 16.1316V16.1316C36.3633 16.0963 36.4192 16.1428 36.3908 16.184L33.1585 20.8762L24.9181 33.2121L24.9181 40.4872L26.1858 45.5481L31.765 57.2514L31.765 66.4243L30.306 68.3221V68.3221C29.91 68.3221 29.5401 68.1243 29.32 67.795L28.4044 66.4243L28.4044 58.2003L22.6995 45.5481Z" fill="#00310E" />
                                            <path d="M25.5519 31.9469L36.3279 16.1316L32.5246 19.2947L25.8688 27.2023L24.2841 29.1001L22.6994 32.5795V43.9665L21.4317 41.436L19.1802 36.9421C18.3649 35.3147 17.876 33.5433 17.7413 31.728V31.728C17.4662 28.0217 18.682 24.3588 21.1189 21.5526L21.4317 21.1925L25.5519 17.7131L31.8907 13.6012L35.377 11.387L39.1803 9.48918L41.3989 14.5501L42.9836 19.9273V29.1001L41.6626 31.2973C40.6441 32.9914 39.4607 34.5807 38.1296 36.042L35.5026 38.9259C34.3645 40.1753 33.1228 41.3264 31.7908 42.3667L26.5027 46.4969L24.918 40.4871V33.2121L25.5519 31.9469Z" fill="url(#paint0_linear_12_55)" />
                                            <path d="M4 38.273H13.6024C14.3742 38.273 15.1354 38.4524 15.8261 38.797V38.797C16.7903 39.2781 17.5724 40.059 18.0551 41.0225L18.8962 42.7013L23.3333 49.0274L20.4809 51.8741L16.6776 53.4557L12.8743 52.8231V52.8231C10.2773 51.8262 8.29287 49.6765 7.50651 47.0082L7.1694 45.8643L4 38.273Z" fill="url(#paint1_linear_12_55)" />
                                            <path d="M28.0874 48.0785L28.2321 47.8699C30.0256 45.2846 32.2241 43.0052 34.7432 41.1198V41.1198H39.4973L40.0187 41.351C41.5699 42.0391 43.06 42.8575 44.4728 43.7975L45.2022 44.2828L50.2732 48.0785V48.0785C48.8051 49.9623 47.0241 51.5797 45.008 52.8601L44.5683 53.1394L43.4125 53.6776C41.1495 54.7316 38.5205 54.6493 36.3279 53.4557V53.4557L28.0874 48.0785Z" fill="url(#paint2_linear_12_55)" />
                                        </g>
                                        <g filter="url(#filter2_d_12_55)">
                                            <path d="M88.9715 46.612C88.8883 46.4982 88.9003 46.3409 88.9998 46.2409L89.326 45.9131L90.8944 44.307L91.9095 43.2939C91.9214 43.2821 91.9375 43.2754 91.9543 43.2754V43.2754C92.0097 43.2754 92.0383 43.3414 92.0004 43.3818L89.5162 46.0264L92.2726 48.7773L95.5303 46.7239C95.5405 46.7175 95.5523 46.7141 95.5643 46.7141V46.7141C95.6211 46.7141 95.6495 46.7826 95.6094 46.8226L94.6845 47.7457L92.9618 49.465L93.5685 50.2569V50.2569C93.738 50.5309 93.887 50.8171 94.0141 51.1131L94.2297 51.6152C94.3031 51.7861 94.3627 51.9627 94.4079 52.1431V52.1431C94.4772 52.4198 94.5123 52.704 94.5123 52.9892L94.5123 53.2088C94.5123 53.3487 94.5294 53.4881 94.5634 53.6238L94.6616 54.0156C94.6766 54.0754 94.6742 54.1382 94.6546 54.1966L94.6054 54.3442C94.5596 54.4813 94.6618 54.6229 94.8067 54.6229V54.6229C94.8396 54.6229 94.8721 54.6153 94.9016 54.6006L95.2014 54.451L96.4179 53.9452C96.9837 53.7099 97.5255 53.4205 98.0356 53.0811V53.0811C98.5567 52.7344 99.0422 52.3372 99.4851 51.8952L100.025 51.3563L99.336 50.6685L95.2013 46.5421L92.1252 43.4721C92.1087 43.4557 92.095 43.4368 92.0846 43.416L91.9894 43.2259C91.9612 43.1697 92.0022 43.1035 92.0652 43.1035V43.1035C92.0877 43.1035 92.1093 43.1124 92.1252 43.1283L93.6508 44.6509L95.0291 46.1983L98.6469 49.6369L99.336 50.3247L100.37 51.3563L101.576 52.5598L99.8528 53.9353L99.1263 54.4992C98.5783 54.9245 97.9896 55.2948 97.3686 55.6047V55.6047C96.3892 56.0935 95.3394 56.4269 94.257 56.5931L93.6508 56.6862L94.1201 55.2813C94.1516 55.1869 94.1677 55.088 94.1677 54.9885L94.1677 54.7167C94.1677 54.6987 94.1734 54.681 94.184 54.6664V54.6664C94.233 54.5988 94.34 54.6334 94.34 54.7167L94.34 54.9668L94.1677 55.6546L93.8231 56.5142L94.4629 56.3981C95.2964 56.2469 96.1074 55.9911 96.8766 55.6368V55.6368C97.5949 55.306 98.2715 54.8916 98.8924 54.4024L101.231 52.5598L100.197 51.5282L98.9914 52.5598L98.2538 53.0751C97.5983 53.533 96.9033 53.9316 96.1769 54.2662L95.674 54.4978C95.245 54.6954 94.7984 54.8524 94.34 54.9668V54.9668V54.9668C94.2297 54.8567 94.1677 54.7074 94.1677 54.5517L94.1677 53.6848C94.1677 53.5083 94.1502 53.3322 94.1155 53.1592L94.0945 53.054C94.0287 52.726 93.9195 52.4082 93.7696 52.109L93.6509 51.872L93.3614 51.2942C93.2108 50.9937 93.0127 50.7193 92.7746 50.4817V50.4817C92.6698 50.3771 92.5726 50.2652 92.4837 50.1469L92.1004 49.6369L91.0667 50.6685L90.3776 51.3562L83.3142 57.8897L79.3518 61.1564L77.9736 62.188L76.9399 63.0477L76.2508 63.7354L75.5617 64.4231V64.4231C75.2176 64.7666 74.8983 65.1339 74.6063 65.5225L74.528 65.6267L73.8389 66.4863L73.0529 67.5322C72.8882 67.7515 72.7435 67.9851 72.6206 68.2303L72.3498 68.771C72.3091 68.852 72.2557 68.9261 72.1914 68.9902L72.1266 69.0549C72.0096 69.1717 71.8509 69.2373 71.6854 69.2373V69.2373C71.52 69.2373 71.3613 69.1717 71.2443 69.0549L70.9102 68.7215L69.9172 67.7304C69.6639 67.4776 69.473 67.1694 69.3597 66.8302V66.8302L69.3597 66.3144V66.3144C69.474 66.5426 69.6192 66.754 69.7911 66.9427L71.1389 68.4223C71.2127 68.5033 71.3173 68.5495 71.427 68.5495V68.5495L71.7716 68.5495V68.5495C71.8772 68.5495 71.9737 68.49 72.0209 68.3957L72.2884 67.8618L73.1498 66.4863L73.8389 65.6267L74.7003 64.5951L75.3894 63.7354L76.0785 63.0477L76.7676 62.36L77.8013 61.5003L78.3182 61.1564L79.0073 60.6406L81.0746 58.9213L90.6449 50.2229C90.6941 50.1782 90.7221 50.1149 90.7221 50.0485V50.0485C90.7221 50.0042 90.7097 49.9609 90.6862 49.9234L88.9993 47.2299V47.2299C88.1997 48.028 87.521 48.9383 86.9848 49.932L86.5875 50.6685L84.8647 53.0756L82.9696 55.1388L81.2469 56.6862L75.2171 61.3284L72.1161 63.7354L70.5657 65.1109L70.0343 65.6412C69.7056 65.9692 69.4724 66.3802 69.3597 66.8302V66.8302L69.3597 66.3144L69.3795 66.255C69.4783 65.9592 69.6731 65.7047 69.9331 65.5318V65.5318C70.01 65.4805 70.0818 65.4219 70.1472 65.3566L70.9102 64.5951L72.8053 63.0477L76.4231 60.2968L82.2638 55.4629C83.0775 54.7896 83.8323 54.0484 84.5201 53.2475V53.2475L85.515 51.9567C85.9992 51.3286 86.4217 50.6556 86.7768 49.9468L86.8913 49.7181C87.1476 49.2065 87.4495 48.719 87.7934 48.2615V48.2615L88.7905 47.1005C88.8147 47.0724 88.8442 47.0494 88.8774 47.0328V47.0328C89.0313 46.956 89.0792 46.7595 88.9778 46.6207L88.9715 46.612Z" fill="#ACABAB" />
                                        </g>
                                        <g filter="url(#filter3_d_12_55)">
                                            <path d="M98.341 27.5809C98.7497 26.9011 99.4429 26.4414 100.228 26.3295L100.533 26.286C101.466 26.1529 102.412 26.4277 103.128 27.0402L103.264 27.1569C103.426 27.2956 103.569 27.4559 103.687 27.6334L104.053 28.1811C104.251 28.4779 104.29 28.8549 104.157 29.1864V29.1864C104.022 29.5243 103.724 29.7727 103.367 29.8439V29.8439C103.048 29.9076 102.717 29.8238 102.468 29.616L101.571 28.8701L101.331 28.7105C101.085 28.5469 100.765 28.5471 100.519 28.711V28.711C100.365 28.8133 100.256 28.9697 100.213 29.1489L97.4798 40.4739L97.6945 40.6883C98.3937 41.3861 99.3004 41.8386 100.279 41.9781V41.9781L102.647 40.4739L102.657 40.4244C102.791 39.7545 102.735 39.0607 102.495 38.4214V38.4214C102.312 37.9331 102.026 37.4898 101.656 37.1213L101.14 36.606L98.8997 34.3701C98.8525 34.323 98.8859 34.2423 98.9527 34.2423V34.2423C98.9725 34.2423 98.9914 34.2501 99.0055 34.2641L100.908 36.1596C101.062 36.3136 101.232 36.452 101.413 36.5728V36.5728C102.071 37.0104 102.551 37.6676 102.769 38.427L102.836 38.6621C102.854 38.7238 102.877 38.7837 102.906 38.8411V38.8411C103.017 39.0628 103.045 39.3169 102.985 39.5575L102.863 40.0442L106.092 37.2507L101.786 41.7632L103.338 43.5057C103.431 43.6096 103.592 43.6143 103.69 43.5159V43.5159C103.712 43.4937 103.73 43.4674 103.742 43.4385L105.228 39.9166C105.36 39.6035 105.291 39.2417 105.053 38.9994V38.9994C104.787 38.7282 104.735 38.3121 104.928 37.9838L105.066 37.7469C105.174 37.5627 105.231 37.3512 105.231 37.1378V37.1378C105.231 36.9312 105.178 36.7262 105.078 36.5457L103.198 33.1683C103.118 33.0254 103.02 32.8938 102.905 32.7769L99.9929 29.8037C99.939 29.7487 99.9781 29.656 100.055 29.656V29.656C100.078 29.656 100.099 29.6648 100.116 29.6806L104.156 33.6096C104.441 33.8868 104.685 34.2024 104.883 34.5474L105.238 35.1673C105.375 35.406 105.446 35.6763 105.446 35.9514V35.9514C105.446 36.3705 105.613 36.7723 105.91 37.0683L106.092 37.2507L106.347 37.4536C106.874 37.8746 107.216 38.4849 107.3 39.1544V39.1544C107.355 39.5968 107.295 40.0461 107.126 40.4588L105.648 44.0644C105.515 44.3893 105.318 44.6845 105.07 44.9327L104.95 45.0518C104.711 45.2908 104.414 45.465 104.089 45.5577V45.5577C103.456 45.7381 102.776 45.5946 102.27 45.1742L101.786 44.7716L100.397 43.3857C100.032 43.0212 99.6319 42.6937 99.2023 42.4079V42.4079C98.7727 42.1221 98.3724 41.7946 98.0072 41.4301L97.4798 40.9037V40.9037C97.3291 41.4287 96.7956 41.746 96.2624 41.6277L96.1026 41.5923C95.4492 41.4474 95.039 40.7984 95.1885 40.146L96.455 34.6195C96.5222 34.3261 96.3825 34.0245 96.1152 33.8863V33.8863C96.0214 33.8378 95.9175 33.8125 95.8119 33.8125L95.6307 33.8125C95.436 33.8125 95.2491 33.8898 95.1113 34.0274V34.0274L94.8553 34.2828C94.7405 34.3975 94.6539 34.5373 94.6025 34.6912V34.6912C94.5147 34.9541 94.5351 35.241 94.6592 35.4887L94.7192 35.6085C94.8304 35.8306 95.04 35.9871 95.2847 36.0308L95.9436 36.1486C96.0278 36.1637 96.0823 36.246 96.0632 36.3294V36.3294C96.0464 36.4027 95.9778 36.4523 95.9029 36.4453L95.4081 36.3988C95.3539 36.3937 95.3005 36.3825 95.2489 36.3653L95.1988 36.3486C94.8702 36.2393 94.6064 35.9909 94.4775 35.6695L94.4037 35.4853C94.3045 35.2377 94.2964 34.9629 94.381 34.7098V34.7098C94.4364 34.5437 94.5299 34.3927 94.6539 34.269L94.8251 34.0981C94.872 34.0513 94.9111 33.9972 94.9408 33.9379V33.9379C95.0453 33.7294 95.2586 33.5976 95.4919 33.5976L95.6635 33.5976C95.7257 33.5976 95.7877 33.6057 95.8478 33.6216V33.6216C96.242 33.7259 96.6444 33.4825 96.735 33.0849L97.6951 28.8702V28.8702C97.1246 29.1548 96.6038 29.5295 96.1525 29.9798L95.3266 30.8041L93.8194 32.3083L93.1734 32.953L94.5053 32.4545C94.7651 32.3573 95.0337 32.2854 95.3074 32.2399L96.1133 32.1059C96.1625 32.0977 96.2128 32.0997 96.2612 32.1118L96.9026 32.2718C96.9593 32.2859 96.9726 32.3605 96.9242 32.3934V32.3934C96.913 32.4011 96.8997 32.4052 96.8861 32.4052L96.5692 32.4052L94.896 32.5232L92.9581 33.3828L92.3122 33.5976L92.7428 33.1679L92.5048 33.0491C92.3781 32.9859 92.2385 32.953 92.0969 32.953V32.953L92.0969 33.0156C92.0969 33.1131 92.1356 33.2066 92.2046 33.2754V33.2754C92.2735 33.3442 92.3668 33.3828 92.4642 33.3828L92.9581 33.3828L92.3122 33.5976L92.0969 33.8125L91.8185 34.0903C91.721 34.1876 91.6662 34.3197 91.6662 34.4573V34.4573C91.6662 34.5948 91.7209 34.7266 91.8181 34.8238L95.5392 38.54L95.4559 38.9136L91.512 34.9498C91.3469 34.7839 91.3063 34.5309 91.4112 34.3215V34.3215C91.4375 34.269 91.4721 34.2212 91.5136 34.1797L92.0207 33.6736C92.0695 33.625 92.0969 33.559 92.0969 33.4901V33.4901C92.0969 33.4214 92.0695 33.3555 92.0209 33.3069L91.6662 32.953L92.0969 32.7381L92.0166 32.658C91.9268 32.5684 91.846 32.4701 91.7755 32.3645L91.4655 31.9004C91.456 31.8862 91.4509 31.8694 91.4509 31.8523V31.8523C91.4509 31.7781 91.5379 31.7381 91.5942 31.7862L92.9581 32.953L93.3887 32.3083L92.0969 31.019L92.3122 31.019L92.5275 31.019L93.6041 32.0934L95.7314 30.1336C96.0978 29.7961 96.1095 29.2218 95.7572 28.8702V28.8702L95.1113 28.2255L84.2518 17.4485V17.4485C83.9686 17.3072 83.6563 17.2336 83.3397 17.2336L83.2328 17.2336C83.0515 17.2336 82.871 17.2558 82.6951 17.2997L82.5763 17.3293C82.2637 17.4073 81.9782 17.5687 81.7502 17.7963L81.7378 17.8086C81.5503 17.9957 81.409 18.224 81.3251 18.4752V18.4752C81.267 18.6491 81.2374 18.8329 81.2374 19.0162V19.0162C81.2374 19.3913 81.3592 19.7594 81.5845 20.0593L81.7699 20.306C81.8454 20.4065 81.928 20.5015 82.0169 20.5902L82.314 20.8867L92.5275 31.019L92.0969 31.019L81.732 20.734C81.547 20.5505 81.3932 20.3381 81.2765 20.1051L81.2215 19.9954C81.0903 19.7336 81.0221 19.4449 81.0221 19.1521V19.1521C81.0221 18.7437 81.1548 18.3463 81.4002 18.0197L81.6144 17.7347C81.6501 17.6872 81.6891 17.6423 81.7312 17.6004L82.0224 17.3097C82.0712 17.261 82.1374 17.2336 82.2063 17.2336V17.2336C82.2752 17.2336 82.3414 17.2063 82.3902 17.1575L82.4216 17.1262C82.4905 17.0574 82.584 17.0187 82.6813 17.0187L82.9599 17.0187L83.3905 17.0187V17.0187C83.8042 17.0187 84.2008 17.1827 84.4934 17.4748L84.6824 17.6634L95.3266 28.2255L96.4578 29.1664C96.5489 29.2421 96.6826 29.2359 96.7665 29.1523V29.1523C96.8096 29.1092 96.8338 29.0508 96.8338 28.99L96.8338 28.9776C96.8338 28.9088 96.8065 28.8429 96.7578 28.7943L95.7795 27.818C95.7652 27.8037 95.7572 27.7844 95.7572 27.7642V27.7642C95.7572 27.6965 95.8391 27.6626 95.887 27.7104L96.4207 28.243C96.5388 28.3609 96.7193 28.3901 96.8688 28.3155L97.0491 28.2255L96.9209 28.0335C96.739 27.7612 96.4071 27.6304 96.0881 27.7052L95.9502 27.7375C95.931 27.742 95.911 27.7423 95.8917 27.7384V27.7384C95.7408 27.708 95.7472 27.4902 95.8997 27.4685L96.4992 27.383C96.5743 27.3723 96.65 27.3975 96.7037 27.451L97.0491 27.7957L97.4797 28.2255V28.2255C97.4797 28.3442 97.3835 28.4404 97.2648 28.4404L97.0491 28.4404L97.2644 28.6553L97.9104 28.4404L98.341 27.5809V27.5809Z" fill="#ACABAB" />
                                            <path d="M82.8687 17.8121C82.9273 17.8007 82.9867 17.7939 83.0464 17.7918L83.0611 17.7913C83.2752 17.7839 83.4879 17.8286 83.6809 17.9217L83.7059 17.9337C83.9223 18.0381 84.1069 18.1985 84.2404 18.3984L84.3477 18.5591C84.4256 18.6756 84.4671 18.8126 84.4671 18.9527V18.9527L84.4671 18.988C84.4671 19.3781 84.312 19.7522 84.0359 20.0277L83.958 20.1054C83.7325 20.3305 83.4269 20.4569 83.1083 20.4569V20.4569C82.8711 20.4569 82.6392 20.3868 82.4418 20.2554L82.3817 20.2154C82.1962 20.092 82.0461 19.9223 81.9464 19.7231V19.7231C81.9045 19.6395 81.8717 19.5511 81.849 19.4604V19.4604C81.7372 19.0138 81.8675 18.5388 82.1933 18.2136L82.314 18.0932L82.314 18.308L82.2251 18.4853C82.142 18.6514 82.0986 18.8345 82.0986 19.0202V19.0202C82.0986 19.2564 82.1687 19.4873 82.2999 19.6837L82.3415 19.746C82.4632 19.9282 82.6436 20.0652 82.8515 20.1343V20.1343C83.0602 20.2037 83.2877 20.2012 83.4944 20.1262L83.5147 20.1188C83.6795 20.059 83.8234 19.9524 83.9288 19.8122V19.8122L84.0489 19.6525C84.1806 19.4772 84.2518 19.2639 84.2518 19.0447V19.0447C84.2518 18.8446 84.1925 18.649 84.0813 18.4826L84.0513 18.4377C83.9032 18.216 83.6779 18.0574 83.4192 17.9929V17.9929C83.1266 17.9199 82.8169 17.9734 82.5658 18.1405L82.314 18.308L82.314 18.0932V18.0932C82.4543 17.9531 82.6332 17.858 82.8279 17.8201L82.8687 17.8121Z" fill="#ACABAB" />
                                            <rect width="0.906332" height="3.44891" rx="0.453166" transform="matrix(0.702307 -0.711875 0.71328 0.700879 100.748 33.2746)" fill="#ACABAB" />
                                            <rect width="0.906332" height="3.44482" rx="0.453166" transform="matrix(0.702307 -0.711875 0.71328 0.700879 99.817 34.2089)" fill="#ACABAB" />
                                            <path d="M98.7984 38.897C98.896 38.6312 99.0639 38.3967 99.2841 38.2184L99.2991 38.2063C99.3779 38.1425 99.4634 38.0875 99.5541 38.0422L99.6382 38.0002C99.7763 37.9313 99.9285 37.8954 100.083 37.8954L100.19 37.8954C100.385 37.8954 100.572 37.9727 100.709 38.1103V38.1103L100.494 38.1103L100.064 38.1103V38.1103C99.7883 38.1103 99.5246 38.2216 99.3326 38.4189L99.2625 38.4909L98.9476 38.9698L98.9476 39.2885L98.9476 39.4247C98.9476 39.6567 99.0391 39.8793 99.2023 40.0442V40.0442L99.4176 40.2591L99.6329 40.474V40.474C99.9038 40.6092 100.223 40.6093 100.494 40.474V40.474L100.925 40.2591L101.14 40.0442L101.273 39.7868V39.7868C101.326 39.6754 101.339 39.549 101.309 39.4294L101.14 38.7549L100.709 38.3252L100.494 38.1103L100.709 38.1103L100.925 38.3252L101.355 38.7549L101.528 39.4442C101.555 39.5498 101.524 39.6616 101.446 39.7385V39.7385C101.388 39.7967 101.355 39.8755 101.355 39.9577L101.355 40.0442L101.14 40.2591L100.709 40.6889L100.279 40.9037L99.9374 40.9037C99.7424 40.9037 99.5555 40.8265 99.4176 40.6889V40.6889L99.2023 40.474L98.987 40.2591L98.7717 40.0442L98.6808 39.2885L98.7717 38.9698L98.7984 38.897Z" fill="#ACABAB" />
                                            <path d="M83.826 19.0884C83.826 19.4444 83.5368 19.733 83.18 19.733C82.8233 19.733 82.5341 19.4444 82.5341 19.0884C82.5341 18.7323 82.8233 18.4437 83.18 18.4437C83.5368 18.4437 83.826 18.7323 83.826 19.0884Z" fill="#ACABAB" />
                                            <path d="M90.7112 31.4158L90.2806 31.6308L90.0653 31.4159L89.204 30.5564L89.4193 30.5564L89.6347 30.3415L89.85 30.5564L89.6346 30.7712L90.2806 31.4159L90.4959 31.201L89.85 30.5564L89.6347 30.3415L88.9887 29.6968L88.5581 29.9117L88.3428 29.6968L87.4815 28.8373L87.6968 28.8373L87.9121 28.6224L88.1275 28.8373L87.9121 29.0522L88.5581 29.6968L88.7734 29.482L88.1275 28.8373L87.9121 28.6224L87.4815 28.1926L86.8356 28.1926L86.6203 27.9778L85.759 27.1182L86.2519 26.9655L86.4049 27.1182L86.1896 27.3331L86.8356 27.9778L87.2662 27.9778L86.4049 27.1182L86.1896 26.9033L85.759 26.4736L85.1131 26.4736L84.8977 26.2587L84.0365 25.3991L84.5991 25.316L84.7818 25.4983L84.4671 25.614L85.1131 26.2587L85.5437 26.2587L84.0365 24.7545L83.3905 24.7545L83.1752 24.5396L82.314 23.6801L82.8842 23.6045L83.0852 23.8051L82.7446 23.895L83.3905 24.5396L83.8212 24.5396L82.314 23.0354L81.668 23.0354L81.4527 22.8205L80.5914 21.961L81.2054 21.9291L81.3812 22.1045L81.0221 22.1759L81.668 22.8205L82.0986 22.8205L80.3761 21.1015L80.3761 20.8866L80.1608 20.2419L79.9455 20.242L79.7302 20.242L80.1608 21.1015L80.3761 21.1015L80.5294 21.2544L79.9455 21.3164L79.5149 20.242L79.5149 19.8122L79.7302 20.0271L79.7302 19.8122L79.7302 18.9527L79.8378 18.8452L79.9455 18.7378L80.1608 18.0931L80.1608 17.8783L79.9455 17.6634L79.8378 17.6634L79.7302 18.0932L79.6225 18.4155L79.8378 18.8452L79.7302 18.9527L79.2995 18.7378L79.5149 18.0932L79.7302 17.6634L79.9455 17.2336L80.1608 17.6634L80.3761 17.4485L80.8067 17.0187L80.5914 16.3741L82.0986 15.5146L82.0986 15.7294L82.0986 16.1592V16.1592C82.2365 16.0216 82.4235 15.9443 82.6184 15.9443L82.7446 15.9443L82.9599 15.9443L83.1752 15.5146L83.3905 15.5146L83.8212 15.5146L84.2518 15.7294L84.6824 15.9443L84.2518 16.1592L84.2518 15.9443V15.9443C84.1139 15.8067 83.9269 15.7294 83.7319 15.7294L83.6597 15.7294L83.2829 15.7294L83.1752 15.9443L82.9599 16.1592L83.0676 16.2667L83.9238 16.2667L84.2518 15.9443L84.2518 16.1592L84.6824 16.3741L85.113 16.589L85.759 16.589L86.6203 17.4485L86.4049 17.6634L86.1896 17.6634L86.8356 18.3081L85.759 17.6634L86.116 17.5446C86.2488 17.5005 86.2885 17.3324 86.1896 17.2336V17.2336L85.759 16.8039L85.3284 16.8039L85.113 16.8039L85.113 17.0187L85.759 17.6634L86.1558 17.901L86.8356 18.3081L87.2662 18.3081L87.4815 18.3081L88.3428 19.1676L87.9121 19.3825L88.5581 20.0271L88.8811 20.0271L88.9887 19.8122L89.204 20.0271L89.6347 20.4569L90.0653 20.8867L89.85 20.8867L89.527 21.1015L90.2806 21.7462L90.7112 21.5313L90.9266 21.7462L91.7878 22.6057L91.5725 22.6057L91.2495 22.8206L92.0031 23.4653L92.4338 23.2504L92.6491 23.4653L93.5103 24.3248L93.295 24.3248L93.0797 24.3785L92.972 24.4591L93.0797 24.5397L93.7257 25.1843L94.1563 24.9695L94.3716 25.1843L95.0175 25.829L95.0175 26.0439L94.6946 26.1513L95.4482 26.9034L95.8788 26.6885L96.0941 26.9034L96.7401 27.5481L96.7401 27.763L96.5247 27.763L96.4171 27.763L96.3633 27.8301L96.3633 27.8704L96.444 28.0316L96.5247 27.9778L96.5247 28.1927L96.3094 28.4076L95.8788 27.9778L95.9212 27.8093L96.5247 27.5481L95.8788 26.9034L95.2329 27.1183L96.0053 27.8937L96.0941 28.1927L95.0175 27.1183L94.3716 26.2588L94.8022 25.829L94.1563 25.1843L93.5103 25.3992L94.1563 26.0439L94.5869 26.0439L94.3716 26.2588L95.0175 27.1183L94.1563 26.2588L93.5103 25.6141L92.8644 24.9695L92.4338 24.5397L93.0797 24.1099L92.4338 23.4653L91.8955 23.6802L92.5645 24.4527L92.4338 24.5397L91.7878 23.895L90.9266 23.0355L90.8445 22.7128L91.3572 22.3908L90.9266 21.9611L90.7112 21.7462L90.173 21.9611L91.0566 22.949L90.9266 23.0355L90.0653 22.176L89.204 21.3164L89.0728 20.9941L89.4193 20.9941L89.6347 20.6718L88.9887 20.242L88.5581 20.242L88.4504 20.3494L89.204 21.1015L89.3057 21.1642L89.204 21.3164L88.3428 20.4569L87.4815 19.5974L88.1275 19.1676L87.2662 18.4155L87.0509 18.5229L86.8356 18.5229L86.7279 18.6304L87.4815 19.3825L88.0073 19.0627L88.1275 19.1676L87.6271 19.5005L87.4815 19.5974L86.6203 18.7378L85.9743 18.0932L85.113 17.2336L84.6824 16.8039L83.6058 16.3741L82.5293 16.3741L82.0986 16.589L81.668 16.589L81.668 15.9443L80.8067 16.3741L81.0221 17.0187L81.668 16.589L81.8833 16.589L81.0221 17.2336L80.8067 17.4485L80.3761 18.308L80.1608 18.9527L80.1608 19.5973L80.3761 20.2419L80.8067 20.8866L86.4049 26.4736L92.2184 32.2754L91.7878 32.4903L91.5725 32.2754L91.3572 32.2754L91.7878 32.9202L92.0031 33.1351L91.7878 33.1351L91.1419 32.4903L90.9266 32.2754L91.3572 32.0605L90.7112 31.4158Z" fill="#ACABAB" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_d_12_55" x="3.80328" y="2.53044" width="120.197" height="76.322" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dy="4" />
                                                <feGaussianBlur stdDeviation="2" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_55" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_55" result="shape" />
                                            </filter>
                                            <filter id="filter1_d_12_55" x="0" y="9.48918" width="54.2732" height="66.8329" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dy="4" />
                                                <feGaussianBlur stdDeviation="2" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_55" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_55" result="shape" />
                                            </filter>
                                            <filter id="filter2_d_12_55" x="65.3597" y="43.1035" width="40.2159" height="34.1338" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dy="4" />
                                                <feGaussianBlur stdDeviation="2" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_55" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_55" result="shape" />
                                            </filter>
                                            <filter id="filter3_d_12_55" x="75.2995" y="15.5146" width="36.0202" height="38.1196" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dy="4" />
                                                <feGaussianBlur stdDeviation="2" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12_55" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12_55" result="shape" />
                                            </filter>
                                            <linearGradient id="paint0_linear_12_55" x1="17.9453" y1="27.5186" x2="37.5823" y2="36.4047" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#49915D" />
                                                <stop offset="0.488119" stop-color="#00310E" />
                                                <stop offset="1" stop-color="#4B874A" />
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_12_55" x1="21.1148" y1="44.5991" x2="14.7919" y2="52.8353" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#248B41" />
                                                <stop offset="0.489583" stop-color="#00310E" />
                                                <stop offset="1" stop-color="#248B41" />
                                            </linearGradient>
                                            <linearGradient id="paint2_linear_12_55" x1="40.4481" y1="41.1198" x2="39.1854" y2="55.3539" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#3F733E" />
                                                <stop offset="0.510417" stop-color="#00310E" />
                                                <stop offset="1" stop-color="#3C6F3A" />
                                            </linearGradient>
                                        </defs>
                                    </svg>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <?php }
        if ($_GET['steps'] == 2) {
            if (isset($_GET['firstchoice']) && array_key_exists($_GET['firstchoice'], $firstChoices)) { ?>
                <div class="row justify-content-center">
                    <h2 class="text-center">Générer votre devis : <br> Choisissez les traveaux que vous sohaitez et leur dimentions</h2>
                    <div class="col-lg-9 col-12 flex-row">
                        <div class="row justify-content-center my-5">
                            <div class="col-12">
                                <div class="row justify-content-center my-3">
                                    <?php foreach ($jobs as $job) { ?>
                                        <div class="form-check col-lg-3 col-4">
                                            <input class="form-check-input" type="radio" name="post" id="post">
                                            <label class="form-check-label" for="post">
                                                <?= $job['tp_name'] ?>
                                            </label>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="row justify-content-center my-3">
                                    <div class="col-lg-8 col-6">
                                        <label class="" for="">
                                            Dimentions
                                        </label>
                                        <input class="inputNb" type="number" name="" id="">
                                        <select class="inputSelect" name="" id="">
                                            <option value="">Choisir une unitée de mesure</option>
                                            <option value="">m²</option>
                                            <option value="">m cube</option>
                                            <option value="">m</option>
                                            <option value="">Autre</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-11">
                                        <label for="">Description</label>
                                        <span class="ms-2 text-danger"><?= isset($errors['description']) ? $errors['description'] : '' ?></span>
                                        <div class="input-group">
                                            <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="Veuillez entrer la description des travaux demandés pour ce poste" aria-label="description"><?= isset($_POST['description']) ? $_POST['description'] : '' ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="devis.php?steps=3" class="btn btn-primary col-2" id="nextStep3">Etape suivante</a>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <p>error</p>
            <?php }
        }
        if ($_GET['steps'] == 3) { ?>
            <div class="row justify-content-center">
                <h2 class="text-center">Générer votre devis : <br> Les traveaux que vous sohaitez</h2>
                <form class="row justify-content-center" action="devis.php?steps=4" method="post">
                    <div class="mb-3 col-11">
                        <label for="">Nom et Prénom</label>
                        <div class="input-group">
                            <input type="text" aria-label="First name" placeholder="Nom" class="form-control">
                            <input type="text" aria-label="Last name" placeholder="Prénom" class="form-control">
                        </div>
                    </div>
                    <div class="mb-3 col-11">
                        <label for="">Email</label>
                        <span class="ms-2 text-danger"><?= isset($errors['mail']) ? $errors['mail'] : '' ?></span>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email" aria-label="Email" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>">
                        </div>
                    </div>
                    <div class="mb-3 col-11">
                        <label for="phone">Numéro de téléphone</label>
                        <span class="ms-2 text-danger"><?= isset($errors['phone']) ? $errors['phone'] : '' ?></span>
                        <div class="input-group">
                            <input type="phone" class="form-control" placeholder="Ex: 07 00 00 00 00" id="phone" name="phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>">
                        </div>
                    </div>
                    <div class="mb-3 col-11">
                        <label for="">Ajouter plus de details pour les traveaux</label>
                        <div class="input-group">
                            <textarea class="form-control" placeholder="Ecrire ici..." aria-label="With textarea"></textarea>
                        </div>
                    </div>
                    <div class="col-11 mb-3 justify-content-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2">
                            <label class="form-check-label" for="invalidCheck2">
                                J'ai lu et j'accepte la <a href="politiques.php">politique de confidentialité</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-11 mb-3 text-center">
                        <button class="btn btn-primary" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        <?php }
        if ($_GET['steps'] == 4) { ?>
            <div class="row justify-content-center">
                <h2 class="text-center">Générer votre devis : <br> Resumé des traveaux que vous sohaitez</h2>

            </div>
    <?php }
    }
    ?>
</div>

<?php
include('../inc/footer.php');
include('../inc/end.php');
