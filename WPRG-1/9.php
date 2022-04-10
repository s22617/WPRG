<?php
print("Enter number of elements in 1st array: ");
$n = fgets(STDIN);
print("Enter number of elements in 2nd array: ");
$m = fgets(STDIN);

$tab1 = [];
$tab2 = [];

$tab1 = insertElements($tab1, $n);
$tab2 = insertElements($tab2, $m);


if (is_numeric($n) && is_numeric($m)) {
    if ($n > 0 || $m > 0) {
        if ($n < $m) {
            scalarProduct($tab1, $tab2);
        }
        else {
            scalarProduct($tab2, $tab1);
        }
    }
    else {
        echo "BLAD";
    }
}
else {
    echo "BLAD";
}

function insertElements($tab, $numberOfElements) {
    for ($i = 0; $i < $numberOfElements; $i++) {
        $input = fgets(STDIN);
        $tab[] = $input;
    }
    return $tab;
}

function scalarProduct($tab1, $tab2) {
    $result = 0;
    print_r($tab1);
    for ($i = 0; $i < count($tab1); $i++) {
        $result += intval($tab1[$i]) * intval($tab2[$i]);
        print($result);
    }
    print($result);
}
