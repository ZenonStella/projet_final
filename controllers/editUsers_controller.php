<?php
if (!isset($_SESSION['user'])) {
    header('location: ../views/connection.php');
    exit;
}
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Users.php';
$usersO = new Users();
$regexName = "/^[ 'éèêëÉÈñàâçïîûüôöa-zA-Z]+$/";
$regexPassword = "/^.{8,12}$/";
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // si ça existe
    if (isset($_POST['lastname'])) {
        // si c'est vide
        if (empty($_POST['lastname'])) {
            $errors['lastname'] = 'Champs obligatoire';
        }
        // sinon si $_POST['lastname'] ne remplit pas le pattern
        else if (!preg_match($regexName, $_POST['lastname'])) {
            $errors['lastname'] = 'format invalide';
        }
    }
    // si ça existe
    if (isset($_POST['firstname'])) {
        // si c'est vide
        if (empty($_POST['firstname'])) {
            $errors['firstname'] = 'Champs obliatoire';
        } 
                // si ça ne remplit pas le pattern
else if (!preg_match($regexName, $_POST['firstname'])) {
            $errors['firstname'] = 'format invalide';
        }
    }
    // si ça existe
    if (isset($_POST['mail'])) {
        // si c'est vide
        if (empty($_POST['mail'])) {
            $errors['mail'] = 'Champs obligatoire';
        } 
                // si ça ne passe pas le filter var : FILTER_VALIDATE_EMAIL
        else if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $errors['mail'] = 'Format invalide';
        }
        // si le mail existe déjà et qui est differant de celui que l'utilisateur utilise déjà
        else if ($usersO->checkIfMailExists(htmlspecialchars($_POST['mail'])) && $_POST['mail'] != $_SESSION['user']['u_email']) {
            $errors['mail'] = 'Ce mail extist déjà';
        }
    }

    if (count($errors) == 0) {
        $lastname = htmlspecialchars($_POST['lastname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $mail = htmlspecialchars($_POST['mail']);
        $usersO->updateUsers($lastname, $firstname, $mail, $_SESSION['user']['u_id']);
        // $_SESSION['swal'] = [
        //     'icon' => 'success',
        //     'title' => 'Profil',
        //     'text' => 'Les modifications apportées à votre profil ont bien été enregistrés'
        // ];
        header('Location: users.php');
        exit;
    }
}
