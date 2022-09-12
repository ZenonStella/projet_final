<?php
require_once '../config.php';
require_once '../models/Database.php';
require_once '../models/Meets.php';
$meetsObj = new Meets();
// $meet = $meetsObj->getAOneMeets();
$days = [
    1 => 'L',
    2 => 'Ma',
    3 => 'Me',
    4 => 'J',
    5 => 'V',
    6 => 'S',
    7 => 'D'
];
$months = [
    1 => 'Javier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Août',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Décembre'
];
if (isset($_GET['month'])) {
    $monthNumber = $_GET['month'];
} else {
    $monthNumber = date('n');
}
if (isset($_GET['year'])) {
    $year = $_GET['year'];
} else {
    $year = date('Y');
}
$monthLetters = $months[$monthNumber];
$totalDaysinMonth = cal_days_in_month(CAL_GREGORIAN, $monthNumber, $year);
$firstDayinMonth = date('N', mktime(0, 0, 0, $monthNumber, 1, $year));
$lastDayinMonth = date('N', mktime(0, 0, 0, $monthNumber, $totalDaysinMonth, $year));
$lines = $totalDaysinMonth + (7 - $lastDayinMonth) + ($firstDayinMonth - 1);
$firstCaseTimestamp = strtotime(date("$year-$monthNumber-1") . '-' . ($firstDayinMonth - 1) . 'days');
/**
 * fonction permettant de créer les dates correspondantes aux jours fériés français
 * @param int $year ex. 1979
 * @return array structure 'mm-dd' => 'jour férié'
 */
function getSpecialDays($year)
{
    // On definie le jour de pâque selon l'année choisie : on se base sur le 21 Mars
    $base = new DateTime("$year-03-21");
    $days = easter_days($year);
    // on formate cette date en format (yyyy-mm-dd) pour faciliter la manipulation par la suite
    $easterDay = $base->add(new DateInterval("P{$days}D"))->format('Y-n-d');
    $specialDays = [
        // On définie les jours fériés fixe : les classiquess 8 jours 
        // format de la clé : Month - Day, la clé permettra d'obtenir le jour férié respectif

        strtotime("$year-1-1") => '1er janvier',
        strtotime("$year-5-1") => 'Fête du travail',
        strtotime("$year-5-8") => 'Victoire des allies',
        strtotime("$year-7-14") => 'Fete nationale',
        strtotime("$year-8-15") => 'Assomption',
        strtotime("$year-11-1") => 'Toussaint',
        strtotime("$year-11-11") => 'Armistice',
        strtotime("$year-12-25") => 'Noël',
        // Jour feries qui dependent du jour de pâque
        strtotime("$easterDay + 1 days") => 'Lundi de paques',
        strtotime("$easterDay+ 39 days")  => 'Ascension',
        strtotime("$easterDay + 50 days") => 'Pentecote',


    ];  
         return $specialDays;
}
$arraySpecialDays = getSpecialDays($year);

    // $meets = $obj->getAllMeetsByYearAndMonth($year, $monthNumber);


function createCase($firstCaseTimestamp, $caseNumber, $month, $arraySpecialDays)
{
    $timestamp = strtotime(date('Y-m-d', $firstCaseTimestamp) . '+' . ($caseNumber - 1) . 'days');
    if (isset($arraySpecialDays[$timestamp])) {
        return '<div class="text-center text-secondary border border-dark">' . date('j', $timestamp)  . '</div>';
    } elseif (date('Y-m-d', $timestamp) == date('Y-m-d')) {
        return '<div class="text-center border border-dark text-primary">' . date('j', $timestamp) . '</div>';
    }elseif (date('D', $timestamp) == 'Sun' || date('D', $timestamp) == 'Sat' ) {
        return '<div class="text-center border border-dark text-danger">' . date('j', $timestamp) . '</div>';
    } elseif (date('n', $timestamp) == $month && date('Y-m-d', $timestamp) > date('Y-m-d')) {
        // if (getMeetsProgamms()) {
            
        // }
        return '<a href="" class="text-dark"><div class="text-center border border-dark">' . date('j', $timestamp) . '</div></a>';
    }elseif (date('n', $timestamp) == $month && date('Y-m-d', $timestamp) < date('Y-m-d')) {
        return '<div class="text-center border border-dark bg-white text-secondary">' . date('j', $timestamp) . '</div>';
    }  else {
        return '<div class="text-center border border-dark bg-secondary">' . date('j', $timestamp) . '</div>';
    }
}