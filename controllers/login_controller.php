<?php
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Users.php';
$usersObj = new Users();
if ($showForm) {
    $user = $usersObj->getOneUsers($_POST['mail']);
    $_SESSION['user'] = $user;
    header('Location: ../admin/home.php');
}
