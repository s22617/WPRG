<?php
$a = fgets(STDIN);

while(true) {
    if (is_numeric($a)) {
        $a = intval($a);
        $b = fgets(STDIN);
        if ((is_numeric($b))) {
            $b = intval($b);
            if (intval($a) > 0 && intval($b) > 0) {
                $tab = array();
                for ($i = 0; $i < $a; $i++) {
                    for ($j = 0; $j < $b; $j++) {
                        $number = fgets(STDIN);
                        if (is_numeric($number)) {
                            $tab[$i][$j] = str_replace("\r\n", "", fgets(STDIN));
                        }
                        else {
                            exit("BŁĄD");
                        }
                    }
                }

                for ($i = 0; $i < $b; $i++) {
                    for ($j = 0; $j < $a; $j++) {
                        print($tab[$j][$i]);
                        if($j < $a - 1) {
                            echo " ";
                        }
                    }
                    print("\n");
                }
                break;
            }
            else {
                echo "BŁĄD";
                break;
            }
        }
        else {
            echo "BŁĄD";
            break;
        }
    }
    else {
        echo "BŁĄD";
        break;
    }
}