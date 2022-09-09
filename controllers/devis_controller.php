<?php

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
    'Gros Oeuvres',
    'Secondes Oeuvres',
    'Espaces Vert'
];
$jobsObj = new Jobs();

if (isset($_GET['firstchoice']) && array_key_exists($_GET['firstchoice'], $firstChoices)) {
    $jobs = $jobsObj->getAlljobsById($_GET['firstchoice']);
}
