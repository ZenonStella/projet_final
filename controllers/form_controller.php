<?php
// var_dump($_SERVER);
$errors = [];
$showForm = true;
$regexName = "/^[a-zA-Z]+$/";
$regexPassword = "/^.{8,12}$/";
$regexPhone = "/^[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}$/";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['lastname'])) {
        if (empty($_POST['lastname'])) {
            $errors['lastname'] = 'Champs obligatoire';
        } else if (!preg_match($regexName, $_POST['lastname'])) {
            $errors['lastname'] = 'format invalide';
        }
    }
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
        }
    }
    if (isset($_POST['phone'])) {
        if (empty($_POST['phone'])) {
            $errors['phone'] = 'Champs obligatoire';
        } else if (!preg_match($regexPhone,$_POST['phone'])) {
            $errors['phone'] = 'Format invalide';
        }
    }   
     if (isset($_POST['text'])) {
        if (empty($_POST['text'])) {
            $errors['text'] = 'Champs obligatoire';
        }
    }
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
    if (isset($_POST['categorys'])) {
        if (empty($_POST['categorys'])) {
            $errors['categorys'] = '*Categorie obligatoire';
        }
    }
    if (!isset($_POST['cgu'])) {
        $errors['cgu'] = 'Veuillez accepter les CGU';
    }
     if(count($errors) == 0){
        $showForm = false;
    }
}

function safeInput($input)
{
   $safeInput =trim($input);
   $safeInput = htmlspecialchars($safeInput);
   return $safeInput;
};