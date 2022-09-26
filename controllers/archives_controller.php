<?php 
if (!isset($_SESSION['user'])) {
    header('location: connection.php');
    exit;
}
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Users.php';
require_once '../models/Missives.php';
require_once '../models/Meets.php';
require_once '../models/Clients.php';
require_once '../models/Estimations.php';
$usersO = new Users();
$users = $usersO->getAllUsersDelete();
$missivesO = new Missives();
$missives = $missivesO->getAllMissivesDelete();

$meetsO = new Meets();
$meets = $meetsO->getAllMeetsDelete();

$clientsO = new Clients();
$clients = $clientsO->getAllClientsDelete();

$estimationsO = new Estimations();
$estimations = $estimationsO->getAllEstimationsDelete();

