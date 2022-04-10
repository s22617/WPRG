<?php
$input = explode(" ", fgets(STDIN));
$text1 = $input[0];
$text2 = str_replace("\r\n", "", $input[1]);

echo "%{$text2} {$text1}%\$#";