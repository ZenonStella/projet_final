<?php 
if (!isset($_SESSION['user'])) {
    header('location: connection.php');
    exit;
}
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Missives.php';

$missivesO = new Missives();
$missives = $missivesO->getAllMissives();