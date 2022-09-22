<?php
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Pictures.php';

$picturesObj = new Pictures();
$pictures = $picturesObj->getAllPictures();