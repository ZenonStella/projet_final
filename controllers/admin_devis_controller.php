<?php
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Jobs.php';
require_once '../models/Estimations.php';


$jobsObj = new Jobs();
$estimationsObj = new Estimations();
$devis = $estimationsObj->getAllEstimations();
// $jobs = $jobsObj->getAlljobs();
// $categorysJobs = $jobsObj->getAllCategorysJobs();
// if ($showForm) {
//     $name = htmlspecialchars($_POST['name']);
//     $categorys = htmlspecialchars($_POST['categorys']);
//     $jobsObj->addNewjobs($name, $categorys);
//     header('Location: home.php');
// }
