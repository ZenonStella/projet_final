<?php
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Missives.php';
require_once '../models/Clients.php';
$missivessObj = new Missives();
$clientsObj = new Clients();

if ($showForm == true) {
    $lastname = htmlspecialchars($_POST['lastname']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $phoneNumber = htmlspecialchars($_POST['phone']);
    $text = htmlspecialchars($_POST['text']);
    $mail = htmlspecialchars($_POST['mail']);
    $city = htmlspecialchars($_POST['city']);
    $zip = htmlspecialchars($_POST['zip']);
    $created = date('Y:m:d');
    // echo $created;
    if (!$clientsObj->checkIfClientsExists($mail)) {
        $clientsObj->addNewClients($lastname, $firstname, $phoneNumber, $mail);
    }
    $client = $clientsObj->getOneClientByMail($mail);
    $missivessObj->addNewMissives($text,$created,$client['c_id']);
    // $doctorsObj = new Doctors();
    // $usersDoctors = new Users();

    // $doctorsObj->addNewdoctors($lastname, $firstname, $phoneNumber, $specialities, $mail);
    // $usersDoctors->addUsers($mail, password_hash($password, PASSWORD_DEFAULT), 3);
    // header('Location: dashboard.php');
}
