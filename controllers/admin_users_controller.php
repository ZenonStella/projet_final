<?php 
if (!isset($_SESSION['user'])) {
    header('location: connection.php');
    exit;
}
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Users.php';

$usersO = new Users();
$users = $usersO->getAllUsers();