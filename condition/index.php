<?php
/**
 * Created by PhpStorm.
 * User: käblik
 * Date: 13.12.2018
 * Time: 15:54
 */

//tingimuslaused
// if(tingimus) {
//      tegevused, mis toimuvad, kui tegevus kehtib
// } else {
//      tegevused, mis toimuvad, kui tingimus ei kehti
//}


echo '<h4>Tingimuslaused</h4>';


/*$arv = rand(0,100);  //juhuslik number vahemikus 0-100
$varv = '';

if ($arv > 0 and $arv < 25) {
    //antud arv on paaris ja ta on roheline
    $varv = 'green';
} else if ($arv > 25 and $arv < 50){
    //antud arv on paaritu ja ta on punane
    $varv = 'red';
} else if ($arv > 50 and $arv < 75){
    //antud arv on paaritu ja ta on punane
    $varv = 'yellow';
} else if ($arv > 75 and $arv < 100){
    //antud arv on paaritu ja ta on punane
    $varv = 'brown';
} else {
    //antud arv on paaritu ja ta on punane
    $varv = 'orange';
}

echo '<p style="color: '.$varv.'">'. $arv . '</p>';*/




$foor = 'punane';

switch ($foor) {
    case 'punane':
        echo '<p style="color: red">punane!</p>';
        break;
    case 'kollane':
        echo '<p style="color: yellow">kollane!</p>';
        break;
    default:
        echo '<p>mingi teine</p>';
        break;
}