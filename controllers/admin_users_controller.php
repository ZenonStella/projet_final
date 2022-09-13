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
// if ($showForm) {
//     $mail = htmlspecialchars($_POST['mail']);
//     $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT) ;
//     $role = htmlspecialchars($_POST['role']);
//     $usersO->addUsers($mail, $password,$role);
//     header('Location: users.php');
// }