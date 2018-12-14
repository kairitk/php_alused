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


/*echo '<h4>Tingimuslaused</h4>';*/


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




/*$foor = 'punane';

switch ($foor) {
    case 'punane':
        echo '<p style="color: red">punane!</p>';
        break;
    case 'kollane':
        echo '<p style="color: yellow">kollane!</p>';
        break;
    case 'kroheline':
        echo '<p style="color: green">roheline!</p>';
        break;
    default:
        echo '<p>mingi teine</p>';
        break;
}*/




echo '<h3>Tsüklid</h3>';

/*for ($arv = 1; $arv <=10; $arv++) {
    echo $arv.'<br>';
}*/




/*$varv = '';
for ($arv = 1; $arv <=10; $arv++) {
    if ($arv % 2 == 0){
        $varv = 'green';
    }else{
        $varv = 'red';
    }
    echo '<div style="color: '.$varv.'">'.$arv.'</div><br>';
}*/




//korrutustabel
//(esimene tsükkel genereerib esimesed arvud, teine tsükkel genereerib teissed arvud ja korrutab need)
/*echo '<table>';
for ($arv = 1; $arv <= 10; $arv++) {
    echo '<tr>';
    for ($arv2 = 1; $arv2 <= 10; $arv2++) {
        echo '<td>'.$arv*$arv2.'</td>';
    }
    echo '</tr>';
}
echo '</table>';*/





// on antud arv 123
//liidame numbrid selles arvus järjekorras 3+2+1
$arv = 123;
$numbriteSumma = 0;
while ($arv != 0) {
    //leiame numbri
    $number = $arv % 10;
    echo 'Number = ' . $number . '<br>';
    //valmistame arvu järgmiseks tsükli sammuks
    $arv = $arv / 10;
    settype($arv,'int');
    echo 'Uus arv on ' . $arv . '<br>';
    //leiame ka hetkel oleva summa
    $numbriteSumma = $numbriteSumma + $number;
    echo 'Hetkel summa = ' . $numbriteSumma . '<br>';
}
echo 'Lõplik summa = '.$numbriteSumma.'<br>';





