<?php
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Meets.php';
require_once '../models/Users.php';
require_once '../models/Clients.php';
$meetsObj = new Meets();
$clientsObj = new Clients();
$usersObj = new Users();

if ($showForm == true) {
    $lastname = htmlspecialchars($_POST['lastname']);
    if (!isset($_POST['cgu'])) {
        $errors['cgu'] = '*Veuillez accepter les CGU';
    } else {
        $firstname = htmlspecialchars($_POST['firstname']);
        $phoneNumber = htmlspecialchars($_POST['phone']);
        $mail = htmlspecialchars($_POST['mail']);
        $date = $_POST['date'];
        $hour = htmlspecialchars($_POST['hour']);
        $created = date('Y:m:d');
        $user = $usersObj->getOneUsersByRole('editeur');
        // $hourFormat = 'HH:MM:II';
        // echo $created;
        if ($clientsObj->checkIfClientsExists($mail)) {
            if ($phoneNumber != '') {
                $clientsObj->addNewClientsWithPhone($lastname, $firstname, $phoneNumber, $mail);
            } else {
                $clientsObj->addNewClients($lastname, $firstname, $mail);
            }
        }
        $client = $clientsObj->getOneClientByMail($mail);
        $meetsObj->addNewMeets($created,$date,$hour,$client['c_id'],$user['u_id']);
        $_SESSION['swal'] = [
            'icon' => 'success',
            'title' => 'Rendez-vous',
            'text' => 'Le rendez-vous a bien été prise en compte, nous vous recontacterons prochainement pour le confirmer '
        ];
        header('Location: home.php');
        exit;
    }
}