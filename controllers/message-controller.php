<?php
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Missives.php';
require_once '../models/Clients.php';
$missivessObj = new Missives();
$clientsObj = new Clients();

if ($showForm == true) {

    if (!isset($_POST['cgu'])) {
        $errors['cgu'] = '*Veuillez accepter les CGU';
    } else {


        $lastname = htmlspecialchars($_POST['lastname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $phoneNumber = htmlspecialchars($_POST['phone']);
        $text = htmlspecialchars($_POST['text']);
        $mail = htmlspecialchars($_POST['mail']);
        $created = date('Y/m/d');
        // echo $created;
        if (!$clientsObj->checkIfClientsExists($mail)) {
            if ($phoneNumber != '') {
                $clientsObj->addNewClientsWithPhone($lastname, $firstname, $phoneNumber, $mail);
            } else {
                $clientsObj->addNewClients($lastname, $firstname, $mail);
            }
        }
        $client = $clientsObj->getOneClientByMail($mail);
        $missivessObj->addNewMissives($text, $created, $client['c_id']);
        // $doctorsObj = new Doctors();
        // $usersDoctors = new Users();

        // $doctorsObj->addNewdoctors($lastname, $firstname, $phoneNumber, $specialities, $mail);
        // $usersDoctors->addUsers($mail, password_hash($password, PASSWORD_DEFAULT), 3);
        $_SESSION['swal'] = [
            'icon' => 'success',
            'title' => 'Message',
            'text' => 'Le message a bien été prise en compte, nous vous recontacterons prochainement pour y repondre '
        ];
        header('Location: home.php');
        exit;
    }
}
