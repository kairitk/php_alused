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

$arv1 = 7;
$arv2 = 24;

echo '<h3>Matemaatilised operaatorid</h3>'
echo $arv1.' + '.$arv2.' = '.($arv1+$arv2).'<br>';
echo $arv1.' - '.$arv2.' = '.($arv1-$arv2).'<br>';
echo $arv1.' * '.$arv2.' = '.($arv1*$arv2).'<br>';
echo $arv1.' / '.$arv2.' = '.($arv1/$arv2).'<br>';
echo $arv1.' % '.$arv2.' = '.($arv1%$arv2).'<br>';

echo 'hr>';
echo '<h3>Võrdlusoperaatorid</h3>';

echo $arv1.' < '.$arv2.' siis '.($arv1 < $arv2).'<br>';
echo $arv1.' > '.$arv2.' siis '.($arv1 > $arv2).'<br>';
echo $arv1.' <= '.$arv2.' siis '.($arv1 <= $arv2).'<br>';
echo $arv1.' >= '.$arv2.' siis '.($arv1 >= $arv2).'<br>';
echo $arv1.' == '.$arv2.' siis '.($arv1 == $arv2).'<br>';
echo $arv1.' != '.$arv2.' siis '.($arv1 != $arv2).'<br>';



