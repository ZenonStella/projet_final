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
require_once '../models/Pictures.php';
require_once '../models/Articles.php';


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
            $clientsObj = new Clients();
            $clientsObj->softDeleteClients($_GET['id']);
            header('Location: clients.php');
        }
    }
    if ($_GET['obj'] == 2) {
        if (isset($_GET['id'])) {
            $usersObj = new Users();
            $usersObj->softDeleteUsers($_GET['id']);
            header('Location: users.php');
        }
    }
    if ($_GET['obj'] == 3) {
        if (isset($_GET['id'])) {
            $meetsObj = new Meets();
            // $meetsObj->softDeleteMeets($_GET['id']);
            header('Location: meets.php');
        }
    }
    if ($_GET['obj'] == 4) {
        if (isset($_GET['id'])) {
            $meetsObj = new Missives();
            $meetsObj->softDeleteMissives($_GET['id']);
            header('Location: messages.php');
        }
    }
    if ($_GET['obj'] == 5) {
        if (isset($_GET['id'])) {
            $meetsObj = new Estimations();
            // $meetsObj->softDeleteEstimations($_GET['id']);
            header('Location: devis.php');
        }
    }
    if ($_GET['obj'] == 6) {
        if (isset($_GET['id'])) {
            $articlesObj = new Articles();
            $aticlesObj->softDeleteArticles($_GET['id']);
            header('Location: home.php');
        }
    }
}