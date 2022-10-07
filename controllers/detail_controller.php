<?php
if (!isset($_SESSION['user'])) {
    header('location: connection.php');
    exit;
    exit;
}
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Clients.php';
require_once '../models/Missives.php';
require_once '../models/Meets.php';
require_once '../models/Users.php';
require_once '../models/Estimations.php';
require_once '../models/Articles.php';
require_once '../models/Pictures.php';
$clientsObj = new Clients();
$usersObj = new Users();
$meetsObj = new Meets();
$missivesObj = new Missives();
$estimationsObj = new Estimations();
$articlesObj = new Articles();
$picturesObj = new Pictures();
setlocale(LC_ALL, "fr_FR", "French");
$objs = [
    1 => 'client',
    2 => 'user',
    3 => 'meet',
    4 => 'missive',
    5 => 'estimation',
    6 => 'article',
    7 => 'picture'
];

if (isset($_GET['obj']) && array_key_exists($_GET['obj'], $objs)) {
    if ($_GET['obj'] == 1) {
        if (isset($_GET['id'])) {
            if ($clientsObj->checkIfClientsExistsById($_GET['id'])) {
                $client = $clientsObj->getAOneClients($_GET['id']);
                $missives = $missivesObj->getMissivesByClients($_GET['id']);
                $meets = $meetsObj->getAllMeetsByClients($_GET['id']);
                $estimations = $estimationsObj->getAllEstimationsByClients($_GET['id']);
            } else {
                header('Location: ../views/404.php');
                exit;
            }
        } else {
            header('Location: ../views/404.php');
            exit;
        }
    } else if ($_GET['obj'] == 2) {
        if (isset($_GET['id'])) {
            if ($usersObj->checkIfIdExists($_GET['id'])) {
                $user = $usersObj->getOneUsersById($_GET['id']);
            } else {
                header('Location: ../views/404.php');
                exit;
            }
        } else {
            header('Location: ../views/404.php');
            exit;
        }
    } else if ($_GET['obj'] == 3) {
        if (isset($_GET['id'])) {
            if ($meetsObj->checkIfmeetsExists($_GET['id'])) {
                $meet = $meetsObj->getAOneMeets($_GET['id']);
            } else {
                header('Location: ../views/404.php');
                exit;
            }
        } else {
            header('Location: ../views/404.php');
            exit;
        }
    } else if ($_GET['obj'] == 4) {
        if (isset($_GET['id'])) {
            if ($missivesObj->checkIfmissivesExists($_GET['id'])) {
                $missive = $missivesObj->getAOneMissives($_GET['id']);
            } else {
                header('Location: ../views/404.php');
                exit;
            }
        } else {
            header('Location: ../views/404.php');
            exit;
        }
    } else if ($_GET['obj'] == 5) {
        if (isset($_GET['id'])) {
            $devis = $estimationsObj->getOneEstimation($_GET['id']);
            $missions = $estimationsObj->getMissionsOfOneEstimationByClients($devis['e_id']);
        } else {
            header('Location: ../views/404.php');
            exit;
        }
    } else if ($_GET['obj'] == 6) {
        if (isset($_GET['id'])) {
            $article = $articlesObj->getAOneArticles($_GET['id']);
        } else {
            header('Location: ../views/404.php');
            exit;
        }
    } else if ($_GET['obj'] == 7) {
        if (isset($_GET['id'])) {
            $picture = $picturesObj->getOnePictures($_GET['id']);
        } else {
            header('Location: ../views/404.php');
            exit;
        }
    } else {
        header('Location: ../views/404.php');
        exit;
    }
}
