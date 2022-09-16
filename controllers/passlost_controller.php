<?php
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Users.php';
$usersObj = new Users();
if ($showForm) {
    $mail = htmlspecialchars($_POST['mail']);
    $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
    $usersObj->updatePasswordUser($mail, $password);
    header('Location: home.php');
}
