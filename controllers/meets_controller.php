<?php
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Meets.php';

require_once '../models/Clients.php';
$meetsObj = new Meets();
$clientsObj = new Clients();

if ($showForm == true) {$lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $phoneNumber = htmlspecialchars($_POST['phone']);
    $mail = htmlspecialchars($_POST['mail']);
    $date = htmlspecialchars($_POST['date']);
    $hour = htmlspecialchars($_POST['hour']);
    $city = htmlspecialchars($_POST['city']);
    $zip = htmlspecialchars($_POST['zip']);
    $created = date('d:m:yyyy');
    echo $created;


    // $doctorsObj->addNewdoctors($lastname, $firstname, $phoneNumber, $specialities, $mail);
    // $usersDoctors->addUsers($mail, password_hash($password, PASSWORD_DEFAULT), 3);
    // header('Location: dashboard.php');
}
