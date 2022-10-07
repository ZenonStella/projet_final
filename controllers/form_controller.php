<?php
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Users.php';
require_once '../models/Pictures.php';
$usersObj = new Users();
$errors = [];
$showForm = false;
$regexName = "/^[ 'éèêëÉÈñàâçïîûüôöa-zA-Z]+$/";
$regexPassword = "/^.{8,12}$/";
$regexZip = "/[0-9]{5}$/";
$regexPhone = "/^[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}$/";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // lastname clients: (messages, rdv, devis)
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
    // categorys,
    if (isset($_POST['name'])) {
        if (empty($_POST['name'])) {
            $errors['name'] = 'Champs obligatoire';
        } else if (!preg_match($regexName, $_POST['name'])) { // si ça ne remplit pas le pattern
            $errors['name'] = 'Mauvais format, ex. Terrassement';
        }
    }
    // mail clients(messages, rdv, devis), users(login, redgister)
    if (isset($_POST['mail'])) {
        if (empty($_POST['mail'])) {
            $errors['mail'] = 'Champs obligatoire';
        } else if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $errors['mail'] = 'Format invalide';
        }
    }
    // phone clients(messages, rdv, devis) 
    if (isset($_POST['phone'])) {
        if (!empty($_POST['phone']) && !preg_match($regexPhone, $_POST['phone'])) {
            $errors['phone'] = 'Format invalide';
        }
    }
    if (isset($_POST['zip']) && isset($_POST['city'])) {
        if (!empty($_POST['zip']) && !empty($_POST['city'])) {
            if (!preg_match($regexZip, $_POST['zip'])) {
                $errors['address'] = 'Format invalide du code postale';
            }
        } elseif (!empty($_POST['zip']) && empty($_POST['city'])) {
            $errors['address'] = 'Veuillez entre une ville';
        } elseif (empty($_POST['zip']) && !empty($_POST['city'])) {
            $errors['address'] = 'Veuillez entre un code postal';
        }
    }
    if (isset($_POST['role'])) {
        if (empty($_POST['role'])) {
            $errors['role'] = 'Champs obligatoire';
        }
    }
    // title article(title)
    if (isset($_POST['title'])) {
        if (empty($_POST['title'])) {
            $errors['title'] = 'Champs obligatoire';
        }
    }
    // apercu article(preview)
    if (isset($_POST['apercu'])) {
        if (empty($_POST['apercu'])) {
            $errors['apercu'] = 'Champs obligatoire';
        }
    }
    // text messages, articles(text),devis(request)
    if (isset($_POST['text'])) {
        if (empty($_POST['text'])) {
            $errors['text'] = 'Champs obligatoire';
        }
    }
    // date rdv, articles(created,posted,edit),devis(created)
    if (isset($_POST['date'])) {
        if (empty($_POST['date'])) {
            $errors['date'] = 'Champs obligatoire';
        }
    }
    if (isset($_POST['hour'])) {
        if (empty($_POST['hour'])) {
            $errors['hour'] = 'Champs obligatoire';
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


    if (isset($_POST['specialities'])) {
        if (empty($_POST['specialities'])) { // si c'est vide
            $errors['specialities'] = 'Champs obligatoire';
        }
    }
    if (isset($_POST['categorys'])) {
        if (empty($_POST['categorys'])) {
            $errors['categorys'] = 'Champs obligatoire';
        }
    }
    if (count($errors) == 0) {
        if (isset($_POST['mail']) && isset($_POST['password'])) {
            $mail = htmlspecialchars($_POST['mail']);
            $user = $usersObj->getOneUsers($mail);
            if (!$usersObj->checkIfMailExists($mail) || !password_verify($_POST['password'], $user['u_password'])) {
                $errors['all'] = 'Mot de passe ou identifient incorrect';
            }
        }
        if (count($errors) == 0) {
            $showForm = true;
        }
    }
}
