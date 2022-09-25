<?php
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Pictures.php';
require_once '../models/Articles.php';

$picturesObj = new Pictures();
$pictures = $picturesObj->getAllPictures();
$ariclesObj = new Articles();
$articles = $ariclesObj->getAllArticles();