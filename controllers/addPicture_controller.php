<?php
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Pictures.php';
require_once '../models/Jobs.php';
$jobsObj = new Jobs();
$categorysJobs = $jobsObj->getAlljobs();
$pictureObj = new Pictures();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $paramUpload = [
        // Taille max de l'image
        'size' => 4000000,
        // les extensions autorisé
        'extension' => ['jpeg', 'jpg', 'webp', 'png'],
        // le nom du répertoire qui va accueillir les images
        'directory' => '../assets/img/',
        // choix de l'extension lors de l'enregistrement de l'image
        'extend' => 'png'
    ];
    $resultVerifyImg = Pictures::verifyImg('picture', $paramUpload);
    if ($resultVerifyImg['permissionToUpload'] === false) {
        $errors['picture'] = $resultVerifyImg['errorMessage'];
    }
    if (count($errors) == 0) {
        // si l'uploadImage est ok, nous allons créer le docteur dans la bdd
        $name = htmlspecialchars($_POST['name']);
        $category = htmlspecialchars($_POST['categorys']);
        if (isset($_POST['after'])) {
            $after = true;
        } else {
            $after = false;
        }
        $after = htmlspecialchars($_POST['after']);
        if ($_FILES['picture']['error'] == 4) {
            $img = base64_encode(file_get_contents('../assets/img/IMG-20220912-WA0000.png'));
        } else {
            $resultUploadImage = Pictures::uploadImage('picture', $paramUpload);
            $picture = Pictures::convertImagetoBase64($paramUpload['directory'] . $resultUploadImage['imageName']);
        }
        $pictureObj->addNewPicture($name, $picture, $category, $after);
        // $_SESSION['swal'] = [
        //     'icon' => 'success',
        //     'title' => 'Image',
        //     'text' => 'L\'image a bien été enregistrée'
        // ];
        header('Location: news.php');
        exit;
    }
}
