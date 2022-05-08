<!DOCTYPE html>
<html>
    <body>
        <form method="POST">
            Liczba 1<input type="number" name="number1">
            Liczba 2<input type="number" name="number2">
            <select name="option">
                <option value="+">dodawanie</option>
                <option value="-">odejmowanie</option>
                <option value="*">mnożenie</option>
                <option value="/">dzielenie</option>
            </select>
            <input type="submit">
        </form>
    </body>
</html> 


<?php
if(isset($_POST["number1"]) && isset($_POST["number2"])) {
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    $option = $_POST["option"];

    $result = "";
    if ($option == "+") {
        $result = $number1 + $number2;
    }
    else if ($option == "-") {
        $result = $number1 - $number2;
    }
    else if ($option == "*") {
        $result = $number1 * $number2;
    }
    else if ($option == "/") {
        $result = $number1 / $number2;
    }
    echo "<div>$result</div>";
}

?>