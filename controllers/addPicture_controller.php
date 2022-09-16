<?php
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Pictures.php';
require_once '../models/Jobs.php';
$jobsObj = new Jobs();
$categorysJobs = $jobsObj->getAlljobs();
$pictureObj = new Pictures();
if ($showForm) {
    $paramUpload = [
        // Taille max de l'image
        'size' => 4000000,
        // les extensions autorisé
        'extension' => ['jpeg', 'jpg', 'webp', 'png'],
        // le nom du répertoire qui va accueillir les images
        'directory' => '../assets/upload/',
        // choix de l'extension lors de l'enregistrement de l'image
        'extend' => 'webp'
    ];
    $resultVerifyImg = Pictures::verifyImg('picture', $paramUpload);
    if ($resultVerifyImg['permissionToUpload'] === false) {
        $errors['picture'] = $resultVerifyImg['errorMessage'];
    }

    var_dump($resultVerifyImg);
    if (count($errors) == 0) {
        $resultUploadImage = Pictures::uploadImage('picture', $paramUpload);
        // si l'uploadImage est ok, nous allons créer le docteur dans la bdd
        if ($resultUploadImage['success'] === true) {
            // Je stock les valeurs des inputs dans des variables en effectuant un htmlspecialchars et intval afin de m'assurer que les données soient safe
            $name = htmlspecialchars($_POST['name']);
            $category = htmlspecialchars($_POST['category']);
            $after = htmlspecialchars($_POST['after']);
            // Pour récupérer le path de l'image je concatène le chemin du directory et le nom de l'image
            // Grace à la méthode je recupère une image encodée en base 64
            // $picture = Pictures::convertImagetoBase64($paramUpload['directory'] . $resultUploadImage['imageName']);
            // // Si tout est ok, nous retournons sur une page données
            // header('Location: listDoctors.php');
        } else {
            $errors['picture'] = $resultUploadImage['messageError'];
        }
        var_dump($resultUploadImage);
    }
}
