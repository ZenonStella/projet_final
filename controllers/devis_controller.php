<?php
echo '<pre>';
var_dump($_SERVER);
echo '</pre>';
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Jobs.php';
$steps = [
    'Avant de commencer',
    'Etape 1',
    'Etape 2',
    'Etape 3',
    'Etape 4'
];
$firstChoices = [
    'Gros oeuvres',
    'Seconds oeuvres',
    'Espaces vert'
];
$firstChoiceVal;
$jobsObj = new Jobs();
// if () {
//     $_SESSION['devis'];

// }
if (isset($_GET['firstchoice']) && array_key_exists($_GET['firstchoice'], $firstChoices)) {
    $firstChoiceVal = $firstChoices[$_GET['firstchoice']];
    // var_dump($firstChoiceVal)
    $jobs = $jobsObj->getAlljobsById($firstChoiceVal);
}
