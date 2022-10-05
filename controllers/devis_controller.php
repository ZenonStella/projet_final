<?php

// Permet de valider la prise en compte des CGU, dans le cas échéant : go cgu again
if (!isset($_SESSION['cgu'])) {
    header('Location: cgu.php');
    exit;
}
// Permet de valider que nous démarrons sytematiquement en step 1 lorsque les paramètre step et type en sont pas présent (Safe Fil d'Ariane)
if (!isset($_GET['steps']) || ($_GET['steps'] != 1 && !isset($_GET['firstchoice']))) {

    header('Location: devis.php?steps=1');
    exit;
}
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Jobs.php';

$steps = [
    1 => 'Etape 1',
    2 => 'Etape 2',
    3 => 'Etape 3',
    4 => 'Etape 4'
];

// 1 Gros Oeuvre, 2 Second Oeuvre, 3 espaces verts : tableau à générer via requête.
$firstChoices = [
    1 => 'Gros oeuvres',
    2 => 'Seconds oeuvres',
    3 => 'Espaces verts'
];

// Nous calculons le dernier Index de notre array $_SESSION
if (isset($_SESSION['devisNb'])) {
    $index = $_SESSION['devisNb'] - 1;
} else {
    $index = 0;
}

$jobsObj = new Jobs();

if (isset($_GET['firstchoice']) && array_key_exists($_GET['firstchoice'], $firstChoices)) {
    $firstChoiceVal = $firstChoices[$_GET['firstchoice']];
    $jobs = $jobsObj->getAlljobsById($_GET['firstchoice']);
}

if (isset($_POST['addTravaux'])) {
    // Je crée une variable de session permettant de savoir que nous avons cliqué sur addTravaux
    $_SESSION['addTravaux'] = true;
    // je modifie la variable de session devisNb en comptant la longueur du tableau
    $_SESSION['devisNb'] = count($_SESSION['travaux']) + 1;
    header('Location: devis.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Si la personne annule via le bouton annuler
    if (isset($_POST['cancel'])) {
        // Je supprime la variable de session travaux
        unset($_SESSION['travaux']);
        unset($_SESSION['cgu']);
        unset($_SESSION['devisNb']);
        unset($_SESSION['addTravaux']);

        header('Location: cgu.php');
        exit;
    }

    // nous allons stocker toutes les infos dans la variable de session lors du submit recap :
    if (isset($_POST['recap'])) {

        // Je supprime la variable session à l'aide d'un unset
        unset($_SESSION['addTravaux']);

        $type = intval($_GET['firstchoice']);
        $travaux = intval($_POST['travaux']);
        $size = intval($_POST['meusure']);
        $units = htmlspecialchars($_POST['units']);
        $description = htmlspecialchars($_POST['description']);

        // Nous vidons les infos actuels pour injecter les nouvelles infos
        // $_SESSION['travaux'] = [];

        // Nous stockons toutes les infos dans un tableau
        $travaux = [
            'type' => $type,
            'travaux' => $travaux,
            'size' => $size,
            'units' => $units,
            'description' => $description
        ];
        // $job = $jobsObj->getAOnejobs($travaux['travaux']);
        // nous enregistrons les données sous forme de tableau dans la variable de session
        $_SESSION['travaux'][$index] = $travaux;

        header('Location: devis.php?steps=3&firstchoice=' . $_GET['firstchoice']);
        exit;
    }
}
