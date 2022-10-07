<?php
if (!isset($_SESSION['user'])) {
    header('location: connection.php');
    exit;
}
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Clients.php';
require_once '../models/Missives.php';
require_once '../models/Meets.php';
require_once '../models/Users.php';
require_once '../models/Estimations.php';

$objs = [
    1 => 'client',
    2 => 'user',
    3 => 'meet',
    4 => 'missive',
    5 => 'estimation'
];

if (isset($_GET['obj']) && array_key_exists($_GET['obj'], $objs)) {
    if ($_GET['obj'] == 1) {
        if (isset($_GET['id'])) {
            $patientsObj = new Clients();
            $patientsObj->unarchiveClients($_GET['id']);
            header('Location: archivesClients.php');
        }
    } else if ($_GET['obj'] == 2) {
        if (isset($_GET['id'])) {
            $usersObj = new Users();
            $usersObj->unarchiveUsers($_GET['id']);
            header('Location: archivesUsers.php');
        }
    } else if ($_GET['obj'] == 3) {
        if (isset($_GET['id'])) {
            $meetsObj = new Meets();
            $meetsObj->unarchiveMeets($_GET['id']);
            header('Location: archivesMeets.php');
        }
    } else if ($_GET['obj'] == 4) {
        if (isset($_GET['id'])) {
            $meetsObj = new Missives();
            $missivesObj->unarchiveMissives($_GET['id']);
            header('Location: archivesMissives.php');
        }
    } else if ($_GET['obj'] == 5) {
        if (isset($_GET['id'])) {
            $estiationsObj = new Estimations();
            $estiationsObj->unarchiveEstimations($_GET['id']);
            header('Location: archivesEstimations.php');
        }
    } else if ($_GET['obj'] == 6) {
        if (isset($_GET['id'])) {
            $articlesObj = new Articles();
            $aticlesObj->unarchiveArticles($_GET['id']);
            header('Location: home.php');
        }
    } else {
        header('Location: ../views/404.php');
    }
}
