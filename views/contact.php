<?php
session_start();
// require_once '../controllers/calendar_controller.php';
require('../inc/header.php');
?>
<h2 class="text-center mb-5">Bienvenue sur notre page de contact!</h2>
<ul class="nav nav-tabs mb-5">
    <li class="nav-item">
        <a class="nav-link active" href="contact.php">Contact</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="missives.php">Nous laisser un message</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="meets.php">Prendre rendez-vous</a>
    </li>
</ul>

<?php
require('../inc/footer.php'); ?>

<?php
include('../inc/end.php');
?>