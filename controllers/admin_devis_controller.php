<?php

require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Jobs.php';

$jobsObj = new Jobs();
$jobs = $jobsObj->getAlljobs();
$categorysJobs = $jobsObj->getAllCategorysJobs();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $regexName = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,30}$/";

    $errors = [];
    if (isset($_POST['name'])) {
        if (empty($_POST['name'])) {
            $errors['name'] = '*Poste obligatoire';
        } else if (!preg_match($regexName, $_POST['name'])) { // si ça ne remplit pas le pattern
            $errors['name'] = '*Mauvais format, ex. Terrassement';
        }
    }
    if (isset($_POST['categorys'])) {
        if (empty($_POST['categorys'])) {
            $errors['categorys'] = '*Categorie obligatoire';
        }
    }
    if (count($errors) == 0) {
        $name = htmlspecialchars($_POST['name']);
        $categorys = htmlspecialchars($_POST['categorys']);
        $jobsObj->addNewjobs($name, $categorys);
        header('Location: home.php');
    }
}
