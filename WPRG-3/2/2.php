<!DOCTYPE html>
<html>
    <body>
        <form method="POST">

            <label>Field 1</label>
            <input type="text" name="field1"></input><br>
            <label>Field 2</label>
            <input type="text" name="field2"></input><br>
            <label>Field 3</label>
            <input type="text" name="field3"></input><br>

            <input type="submit">
        </form>
    </body>
</html> 

<?php

if(!empty($_POST["field1"]) || !empty($_POST["field2"]) || !empty($POST["field3"])) {
    $field1 = $_POST["field1"];
    $field2 = $_POST["field2"];
    $field3 = $_POST["field3"];

    $text = $field1 . " " . $field2 . " " . $field3 . "\n";

    $file = "./2.txt";

    $f = fopen($file, "a");
    fwrite($f, $text);

    fclose($f);
}
?>