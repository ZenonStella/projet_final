<?php
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Estimations.php';

$estimationsObj = new Estimations();
$devis = $estimationsObj->getAllEstimations();
$deleteDevis = $estimationsObj->getAllEstimationsDelete();
