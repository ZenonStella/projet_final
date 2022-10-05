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
require_once '../models/Estimations.php';
require_once '../models/Clients.php';
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

        header('Location: home.php');
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

    if (isset($_POST['info'])) {
        header('Location: devis.php?steps=4&firstchoice=' . $_GET['firstchoice']);
    }
    if (isset($_POST['validate'])) {
        $errors = [];
        $regexName = "/^[ 'éèêëÉÈñàâçïîûüôöa-zA-Z]+$/";
        $regexZip = "/[0-9]{5}$/";
        $regexPhone = "/^[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}$/";

        if (isset($_POST['lastname'])) {
            if (empty($_POST['lastname'])) {
                $errors['lastname'] = 'Champs obligatoire';
            } else if (!preg_match($regexName, $_POST['lastname'])) {
                $errors['lastname'] = 'format invalide';
            }
        }
        if (isset($_POST['firstname'])) {
            if (empty($_POST['firstname'])) {
                $errors['firstname'] = 'Champs obliatoire';
            } else if (!preg_match($regexName, $_POST['firstname'])) {
                $errors['firstname'] = 'format invalide';
            }
        }

        if (isset($_POST['mail'])) {
            if (empty($_POST['mail'])) {
                $errors['mail'] = 'Champs obligatoire';
            } else if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                $errors['mail'] = 'Format invalide';
            }
        }
        // phone clients(messages, rdv, devis) 
        if (isset($_POST['phone'])) {
            if (!empty($_POST['phone']) && !preg_match($regexPhone, $_POST['phone'])) {
                $errors['phone'] = 'Format invalide';
            }
        }

        if (isset($_POST['zip']) && isset($_POST['city'])) {
            if (!empty($_POST['zip']) && !empty($_POST['city'])) {
                if (!preg_match($regexZip, $_POST['zip'])) {
                    $errors['address'] = 'Format invalide du code postale';
                }
            } elseif (!empty($_POST['zip']) && empty($_POST['city'])) {
                $errors['address'] = 'Veuillez entre une ville';
            } elseif (empty($_POST['zip']) && !empty($_POST['city'])) {
                $errors['address'] = 'Veuillez entre un code postal';
            }
            else {
                $errors['address'] = 'Champs obligatoire';
            }
        }

        if (count($errors) == 0) {
            $clientsObj = new Clients();
            $estimationsObj = new Estimations();

            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $mail = htmlspecialchars($_POST['mail']);
            $phone = htmlspecialchars($_POST['phone']);
            $zip = htmlspecialchars($_POST['zip']);
            $city = htmlspecialchars($_POST['city']);
            $date = date('Y/m/d');

            if (!$clientsObj->checkIfClientsExists($mail)) {
                echo 'existe pas';
                if ($phone != '') {
                    echo 'avec tel';
                    $clientsObj->addNewClientsWithPhone($lastname, $firstname, $phone, $mail);
                } else {
                    echo 'sans tel';
                    $clientsObj->addNewClients($lastname, $firstname, $mail);
                }
            }
            $client = $clientsObj->getOneClientByMail($mail);
            $idDevis = $estimationsObj->addNewEstimations($zip,$city,$date,$client['c_id']);
            foreach ($_SESSION['travaux'] as $key => $value) {
                // var_dump($value);
                $estimationsObj->addNewMission($value['size'], $value['description'], $value['units'], $value['travaux'], $idDevis);
            }
            $_SESSION['swal'] = [
                'icon' => 'success',
                'title' => 'Devis',
                'text' => 'Le devis a bien été prise en compte, nous vous recontacterons prochainement pour y repondre '
            ];
            header('Location: home.php');
            exit;
        }
    }
}
