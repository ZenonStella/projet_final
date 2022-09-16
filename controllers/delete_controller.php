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
            $patientsObj->deleteClients($_GET['id']);
            header('Location: dashboard.php');
        }
    }
    if ($_GET['obj'] == 2) {
        if (isset($_GET['id'])) {
            $usersObj = new Users();
            $usersObj->deleteUsers($_GET['id']);
            header('Location: dashboard.php');
        }
    }
    if ($_GET['obj'] == 3) {
        if (isset($_GET['id'])) {
            $meetsObj = new Meets();
            $meetsObj->deleteMeets($_GET['id']);
            header('Location: dashboard.php');
        }
    }
    if ($_GET['obj'] == 4) {
        if (isset($_GET['id'])) {
            $meetsObj = new Missives();
            $meetsObj->deleteMissives($_GET['id']);
            header('Location: dashboard.php');
        }
    }
    if ($_GET['obj'] == 5) {
        if (isset($_GET['id'])) {
            $meetsObj = new Estimations();
            $meetsObj->deleteEstimations($_GET['id']);
            header('Location: dashboard.php');
        }
    }
}