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
    if (isset($_POST['lastname'])) {
        if (empty($_POST['lastname'])) {
            $errors['lastname'] = 'Champs obligatoire';
        } else if (!preg_match($regexName, $_POST['lastname'])) {
            $errors['lastname'] = 'format invalide';
        }
    }
    // firstname clients: (messages, rdv, devis)
    if (isset($_POST['firstname'])) {
        if (empty($_POST['firstname'])) {
            $errors['firstname'] = 'Champs obliatoire';
        } else if (!preg_match($regexName, $_POST['firstname'])) {
            $errors['firstname'] = 'format invalide';
        }
    }
    if (isset($_POST['mail'])) {
        if (empty($_POST['mail'])) {
            $errors['mail'] = 'Champs obligatoire';
        } else if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $errors['mail'] = 'Format invalide';
        } else if ($usersO->checkIfMailExists(htmlspecialchars($_POST['mail']))) {
            $errors['mail'] = 'Ce mail extist déjà';
        }
    }
    if (isset($_POST['password'])) {
        if (empty($_POST['password'])) {
            $errors['password'] = 'Champs obligatoire';
        } elseif (!preg_match($regexPassword, $_POST['password'])) {
            $errors['password'] = 'Le mot de passe doit contenire entre 8 et 12 caractères';
        } elseif (isset($_POST['confirmPassword'])) {
            if (empty($_POST['confirmPassword'])) {
                $errors['confirmPassword'] = 'Champs obligatoire';
            } else if ($_POST['confirmPassword'] != $_POST['password']) {
                $errors['confirmPassword'] = 'Les mots de passes doivent être identiques';
            }
        }
    }

    if (count($errors) == 0) {
        $lastname = htmlspecialchars($_POST['lastname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $mail = htmlspecialchars($_POST['mail']);
        $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_DEFAULT);
        $role = htmlspecialchars($_POST['role']);
        $usersO->addUsers($lastname, $firstname, $mail, $password, $role);
        $_SESSION['swal'] = [
            'icon' => 'success',
            'title' => 'Utilisateur',
            'text' => 'L\'utilisateur a bien été enregistrée'
        ];
        header('Location: users.php');
        exit;
    }
}
