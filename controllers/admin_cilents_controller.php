<?php 
if (!isset($_SESSION['user'])) {
    header('location: connection.php');
    exit;
}
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Clients.php';

$clientsO = new Clients();
$clients = $clientsO->getAllClients();