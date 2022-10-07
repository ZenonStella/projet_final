<?php 
if (!isset($_SESSION['user'])) {
    header('location: ../views/connection.php');
    exit;
}
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Users.php';
$usersO = new Users();
if ($showForm) {
    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $mail = htmlspecialchars($_POST['mail']);
    $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT) ;
    $role = htmlspecialchars($_POST['role']);
    $usersO->addUsers($lastname, $firstname, $mail, $password,$role);
    $_SESSION['swal'] = [
        'icon' => 'success',
        'title' => 'Utilisateur',
        'text' => 'L\'utilisateur a bien été enregistrée'
    ];
    header('Location: users.php');
    exit;
}