<?php
$month = fgets(STDIN);
$result = "BLAD";

switch($month) {
    case "1":
        $result = "Styczeń: 31 dni";
        break;
    case "2":
        $result = "Luty: 28 dni";
        break;
    case "3":
        $result = "Marzec: 31 dni";
        break;
    case "4":
        $result = "Kwiecień: 30 dni";
        break;
    case "5":
        $result = "Maj: 31 dni";
        break;
    case "6":
        $result = "Czerwiec: 30 dni";
        break;
    case "7":
        $result = "Lipiec: 31 dni";
        break;
    case "8":
        $result = "Sierpień: 31 dni";
        break;
    case "9":
        $result = "Wrzesień: 30 dni";
        break;
    case "10":
        $result = "Październik: 31 dni";
        break;
    case "11":
        $result = "Listopad: 30 dni";
        break;
    case "12":
        $result = "Grudzień: 31 dni";
        break;
    default:
        $result = "BŁĄD";
    }
    echo $result;