<?php
class Pictures
{
    
    public static function verifyImg(string $inputName, array $paramUpload): array
    {
        // Nous déclarons une variable nous permettant oui ou non d'uploader l'image
        $permissionUpload = true;
        // Nous allons créer une variable qui contiendra le message d'erreur
        $errorMessage = '';
        // si il y une erreur de l'input $_FILES, ex. error 4 = fichier vide
        // on indique que l'upload est en false et nous allons créer un message d'erreur
        if ($_FILES[$inputName]["error"] !== 0) {
            $permissionUpload = false;
            $errorMessage = 'Veuillez sélectionner une image à télécharger';
        } else {
            // Nous allons extraire le MIME du fichier à l'aide de la fonction mime_content_type
            $fileMime = mime_content_type($_FILES[$inputName]["tmp_name"]);
            // Nous allons récupérer l'extension du fichier pour la stocker dans une variable
            $fileName = basename($_FILES[$inputName]["name"]);
            $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            // strpos() pour rechercher le mot 'image' dans le mime, si nous le trouvons pas, nous allons indiquer upload en false et message d'erreur
            if (strpos($fileMime, 'image') === false) {
                $permissionUpload = false;
                $errorMessage = 'Veuillez sélectionner uniquement une image';
            }
            // Nous contrôlons si l'extension n'est pas présente dans le tableau à l'aide la fonction !in_array()
            else if (!in_array($fileExtension, $paramUpload['extension'])) {
                $permissionUpload = false;
                $errorMessage = 'Seules les extensions ' . implode(' ,', $paramUpload['extension']) . ' sont autorisées';
            }
            // Nous contrôlons la taille de d'image
            else if ($_FILES[$inputName]["size"] > $paramUpload['size']) {
                $permissionUpload = false;
                $errorMessage = 'La taille max est de ' . $paramUpload['size'] / 1000000 . 'Mo';
            }
        }
        // Nous allons créer un tableau contenant le statut de l'upload
        $statut = [
            'permissionToUpload' => $permissionUpload,
            'errorMessage' => $errorMessage,
        ];
        return $statut;
    }
    public static function uploadImage(string $inputName, array $paramUpload): array
    {

        // Nous allons créer une variable qui contiendra le message d'erreur
        $errorMessage = '';
        // Nous allons créer une variable qui contiendra le nom de l'image
        $imageName = '';

        // Nous indiquons le chemin du répertoire dans lequel les images vont être téléchargés.
        $directory = $paramUpload['directory'];

        // Nous allons définir $new_name qui aura un nom d'image unique avec : la fonction uniqid() et une extension choisie
        $new_name = uniqid() . '.' . $paramUpload['extend'];

        // Nous allons uploader l'image à l'aide de la fonction move_uploaded_file()
        if (move_uploaded_file($_FILES[$inputName]["tmp_name"], $directory . $new_name)) {
            $success = true;
            $imageName = $new_name;
        } else {
            $success = false;
            $errorMessage = "L'image n'a pas pu être téléchargée";
        }

        // Nous allons créer un tableau contenant le statut de l'upload
        $statut = [
            'success' => $success,
            'errorMessage' => $errorMessage,
            'imageName' => $imageName
        ];

        return $statut;
    }

    public static function convertImagetoBase64(string $imagePath): string
    {
        // Nous allons récupérer l'image selon le chemin donné en paramètre.
        $imageTemp = file_get_contents($imagePath);
        // Nous allons encoder l'image à l'aide de base64_encode() et nous allons la stocker dans une variable.
        $image64 = base64_encode($imageTemp);
        // Nous allons supprimer l'image une fois encodée à l'aide la fonction unlink()
        unlink($imagePath);
        // Nous récupérons l'image à l'aide du return
        return $image64;
    }
}
