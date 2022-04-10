<?php
$a = fgets(STDIN);
$b = fgets(STDIN);
$c = fgets(STDIN);

$tab = [$a, $b, $c];
printInAscendingOrder($tab);
printInDescendingOrder($tab);

function printInAscendingOrder($tab) {
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 2; $j++) {
            if ($tab[$j] > $tab[$j + 1]) {
                $tmp = $tab[$j];
                $tab[$j] = $tab[$j + 1];
                $tab[$j + 1] = $tmp;
            }
        }
    }
    print_r($tab);
}

function printInDescendingOrder($tab) {
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 2; $j++) {
            if ($tab[$j] < $tab[$j + 1]) {
                $tmp = $tab[$j];
                $tab[$j] = $tab[$j + 1];
                $tab[$j + 1] = $tmp;
            }
        }
    }
    print_r($tab);
}
