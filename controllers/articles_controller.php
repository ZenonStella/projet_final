<?php
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Articles.php';

$articlesObj = new Articles();
$articles = $articlesObj->getAllArticlesPosted();
$articlesId = $articlesObj->getAllArticlesId();
if (isset($_GET['article']) && $_GET['article'] == $articlesId[0]['a_id']) {
    $thisArticle = $articlesObj->getAOneArticles($_GET['article']);
}
