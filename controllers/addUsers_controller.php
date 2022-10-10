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
    // si $_POST['lastname'] exist
    if (isset($_POST['lastname'])) {
        // si $_POST['lastname'] est vide
        if (empty($_POST['lastname'])) {
            $errors['lastname'] = 'Champs obligatoire';
        }
        // sinon si $_POST['lastname'] ne remplit pas le pattern
        else if (!preg_match($regexName, $_POST['lastname'])) {
            $errors['lastname'] = 'format invalide';
        }
    }
    // si $_POST['firstname'] exist
    if (isset($_POST['firstname'])) {
        // si $_POST['firstname'] exist
        if (empty($_POST['firstname'])) {
            $errors['firstname'] = 'Champs obliatoire';
        }
        // sinon si $_POST['firstname'] ne remplit pas le pattern
        else if (!preg_match($regexName, $_POST['firstname'])) {
            $errors['firstname'] = 'format invalide';
        }
    }

    // si $_POST['mail'] exist
    if (isset($_POST['mail'])) {
        // si $_POST['mail'] est vide
        if (empty($_POST['mail'])) {
            $errors['mail'] = 'Champs obligatoire';
        }
        // sinon si $_POST['mail'] ne remplit pas le pattern
        else if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $errors['mail'] = 'Format invalide';
        } else if ($usersO->checkIfMailExists(htmlspecialchars($_POST['mail']))) {
            $errors['mail'] = 'Ce mail extist déjà';
        }
    }

    // si $_POST['password'] exist
    if (isset($_POST['password'])) {
        // si $_POST['password'] est vide
        if (empty($_POST['password'])) {
            $errors['password'] = 'Champs obligatoire';
        }
        // sinon si $_POST['password'] ne remplit pas le pattern
        elseif (!preg_match($regexPassword, $_POST['password'])) {
            $errors['password'] = 'Le mot de passe doit contenire entre 8 et 12 caractères';
        }
        // si $_POST['confirmPassword'] exist
        elseif (isset($_POST['confirmPassword'])) {
            // si $_POST['confirmPassword'] est vide
            if (empty($_POST['confirmPassword'])) {
                $errors['confirmPassword'] = 'Champs obligatoire';
            }
            // si $_POST['confirmPassword'] n'est pas egale a $_POST['password]
            else if ($_POST['confirmPassword'] != $_POST['password']) {
                $errors['confirmPassword'] = 'Les mots de passes doivent être identiques';
            }
        }
    }

    if (count($errors) == 0) {
        // Je stock les valeurs des inputs dans des variables en effectuant un htmlspecialchars et intval afin de m'assurer que les données soient safe
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
