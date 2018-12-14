<?php
/**
 * Created by PhpStorm.
 * User: käblik
 * Date: 14.12.2018
 * Time: 11:31
 */


//on antud number 442158755745
//leia, mitu korda esineb iga number selles arvus
//selleks võtame kasutusele funktsiooni
$arv = 442158755745;

function numbriKordumine ($arv, $kontrollNumber){
    echo 'Arv on '.$arv.'<br>';
    $numberKokku = 0;
    while ($arv != 0){
        $number = $arv % 10;
        if ($number == $kontrollNumber){
            $numberKokku = $numberKokku + 1; //$numberKokku++;
        }
        $arv = $arv / 10;
        settype($arv,'int');
    }
    echo 'Number '.$kontrollNumber.' esineb antud arvus '.$numberKokku.' korda<br>';
}

//kutsume funktsiooni välja
numbriKordumine(442158755745, 5);
numbriKordumine(442158755745, 7);