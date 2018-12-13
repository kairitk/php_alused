<?php
/**
 * Created by PhpStorm.
 * User: käblik
 * Date: 13.12.2018
 * Time: 15:17
 */

//muutujate defineerimine
//$muutujaNimi = väärtus;

//ära kasuta täpitähti muutujate sees, server ei saa nendest aru

$taisArv = 7;
$reaalArv = 3.14;
$sone = '7';
$toevaartusTrue = true;
$toevaartusFalse = false;

echo '$taisArv'.'<br>';
echo $taisArv.'<br>';
echo 'Täisarv = '.$taisArv.'<br>';

echo 'Reaalarv = '.$reaalArv.'<br>';
echo 'Sõne = '.$sone.'<br>';
echo 'Tõeväärtus true = '.$toevaartusTrue.'<br>';
echo 'Tõeväärtus false = '.$toevaartusFalse.'<br>';

echo gettype($sone).'<br>';
settype($sone, 'int');
echo gettype($sone).'<br>';