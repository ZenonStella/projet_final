<?php
session_start();
$errors = [];
$regexPassword = "/^.{8,12}$/";
$login = 'stellazenon@gmail.com';
$passwordLog = password_hash('Coucou12', PASSWORD_DEFAULT);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['mail'])) {
        if (empty($_POST['mail'])) {
            $errors['mail'] = 'Champs obligatoire';
        } else if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $errors['mail'] = 'Format invalide';
        }
    }
    if (isset($_POST['password'])) {
        if (empty($_POST['password'])) {
            $errors['password'] = 'Champs obligatoire';
        } elseif (!preg_match($regexPassword, $_POST['password'])) {
            $errors['password'] = 'Le mot de passe doit contenire entre 8 et 12 caractères';
        }
    }
    if ($_POST['mail'] != $login && !password_verify($_POST['password'], $passwordLog)) {
        $errors['all'] = 'Mot de passe ou identifient incorrect';
    }
    if (count($errors) == 0) {
        // $session_start();
        $_SESSION['user'] = [
            'lastname' => 'Stella',
            'firstname' => 'Zenon',
            'gender' => 'femme',
            'role' => 2,
            'identifient' => $login,
            'theme' => 'brown',
            'choise' => 'homme',
            'img' => 'stella'

        ];
        header('Location: home.php');
    }
}

function safeInput($input)
{
    $safeInput = trim($input);
    $safeInput = htmlspecialchars($safeInput);
    return $safeInput;
};
