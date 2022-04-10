<?php
$correctInput = false;

$a = fgets(STDIN);
$b = fgets(STDIN);
$c = fgets(STDIN);

//var_export(is_int($a));

if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
    $correctInput = true;
}
else {
    echo "BLAD";
}

if ($correctInput) {
    if ($a > 0 && $b > 0 && $c > 0) {
        if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
            echo "This triangle can actually exist, congrats";
        }
        else {
            echo "BLAD";
        }
    }
    else {
        echo "BLAD";
    }

}