<?php
$input = fgets(STDIN);
$tab = [];

$input = str_replace("\r\n", "", $input);
$input = str_replace(" ", "", $input);
$input = strtolower($input);
$tab = str_split($input);
var_dump(isAPangram($tab));

function isAPangram($tab) {
    $letters = [];

    for ($i = 0; $i < 26; $i++) {
        $letters = [false];
    }

    for ($i = 0; $i < count($tab); $i++) {
        if (ord($tab[$i]) >= 97 && ord($tab[$i]) <= 122) {
            $letters[ord($tab[$i]) - 97] = true;
        }
        else continue;
    }

    for ($i = 0; $i < 26; $i++) {
        if ($letters[$i] != true) {
            return false;
        }
        return true;
    }
}