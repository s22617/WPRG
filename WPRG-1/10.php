<?php
$x = 0;
while(true) {
    $x = fgets(STDIN);
    if (is_numeric($x)) {
        if (intval($x) > 0) {
            $x = intval($x);
            break;
        }
    }
}

//First pyramid
for ($i = 1; $i <= $x; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        print("*");
    }
    print("\n");
}
for ($i = $x; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        print("*");
    }
    print("\n");
}
//Second pyramid
for ($i = $x; $i >= 1; $i--) {
    for ($j = $x - $i; $j > 0; $j--) {
        print(" ");
    }
    for ($j = 1; $j <= $i; $j++) {
        print("*");
    }
    print("\n");
}
for ($i = 1; $i <= $x; $i++) {
    for ($j = $x - $i; $j > 0; $j--) {
        print(" ");
    }
    for ($j = 1; $j <= $i; $j++) {
        print("*");
    }
    print("\n");
}