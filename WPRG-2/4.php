<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet">
    </head>
    <body>
        <form method="POST">
            <label>Prime number?</label>
            <input type="number" name="number" min="0">

            <input type="submit">
        </form>
    </body>
</html> 

<?php
if(isset($_POST["number"])) {
    $number = $_POST["number"];
    checkIfPrime($number);
}

function checkIfPrime($number) {
    if ($number <= 3) {
        echo "True";
    }
    else if ($number%3 == 0 || $number%2 == 0) {
        echo "False";
    }
    else {
        $iterations = 0;
        $isPrime = true;
        for ($i = 5; $i * $i <= $number; $i+=6) {
            $iterations++;
            if ($number%$i == 0 || $number%($i+=2) == 0) {
                $isPrime = false;
                break;
            }
        }
        if (!$isPrime) {
            echo "False (Iterations: $iterations)";
        }
        else {
            echo "True (Iterations: $iterations)";
        }   
    }
}
?>
