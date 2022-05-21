<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <form method="POST">
            <label>Number of residents</label>
            <select name="residents-number">
                <option disabled selected value> -- select an option -- </option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select><br>

            <label>Name</label>
            <input type="text" name="name"></input><br>
            <label>Surname</label>
            <input type="text" name="surname"></input><br>

            <br><br>

            <label>City</label>
            <input type="text" name="city"></input><br>
            <label>Street</label>
            <input type="text" name="street"></input><br>
            <label>House</label>
            <input type="text" name="house"></input><br>

            <br><br>

            <label>Email</label>
            <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/><br>

            <label>Arrival</label>
            <input type="date" name="date" id="start" min="2022-07-05" max="2022-12-31"><br>

            <br><br>

            <input type="checkbox" name="child-bed">
            <label>Bed for a child</label><br>

            <input type="checkbox" name="air-conditioning">
            <label>Air conditioning</label><br>

            <input type="checkbox" name="ashtray">
            <label>Ashtray</label><br>

            <input type="submit">
        </form>
        <form action="3.php" method="POST">
            <input type="submit" name="loadData" value="Wczytaj" />
        </form>

    </body>
</html> 

<?php
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['loadData'])) {
    readFromCSV();
}


if(isset($_POST["residents-number"]) &&
!empty($_POST["name"]) &&
!empty($_POST["surname"]) &&
!empty($_POST["city"]) &&
!empty($_POST["street"]) &&
!empty($_POST["house"]) &&
!empty($_POST["email"]) &&
!empty($_POST["date"])) {

    $residentsNumber = $_POST["residents-number"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $city = $_POST["city"];
    $street = $_POST["street"];
    $house = $_POST["house"];
    $email = $_POST["email"];
    $date = $_POST["date"];
    $childBed = "";
    $airConditioning = "";
    $ashtray = "";
    if (isset($_POST["child-bed"])) {
        $childBed = "included";
    }
    if (isset($_POST["air-conditioning"])) {
        $airConditioning = "included";
    }
    if (isset($_POST["ashtray"])) {
        $ashtray = "included";
    }

    $header =   ["residents-number", "name", "surname",
                "city", "street", "house",
                "email", "date", "child-bed", "air-conditioning"];

    $file = "3.csv";
    if(file_exists($file) && filesize($file) == 0 || !file_exists($file)) {
        $f = fopen($file, "a");
        fputcsv($f, $header);
        fclose($f);
    }
    $f = fopen($file, "a");

    $data = [$residentsNumber, $name, $surname, $city,
            $street, $house, $email, $date, $childBed, $airConditioning, $ashtray];

    fputcsv($f, $data);

    fclose($f);
    

    echo "<table class=\"styled-table\">
    <thead>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Number of residents</td>
            <td>$residentsNumber</td>
        </tr>
        
        <tr>
            <td>Name</td>
            <td>$name</td>
        </tr>

        <tr>
            <td>Surname</td>
            <td>$surname</td>
        </tr>

        <tr>
            <td>City</td>
            <td>$city</td>
        </tr>

        <tr>
            <td>Street</td>
            <td>$street</td>
        </tr>

        <tr>
            <td>House</td>
            <td>$house</td>
        </tr>

        <tr>
            <td>Email</td>
            <td>$email</td>
        </tr>

        <tr>
            <td>Date</td>
            <td>$date</td>
        </tr>

        <tr>
            <td>Child bed</td>
            <td>$childBed</td>
        </tr>

        <tr>
            <td>Air conditioning</td>
            <td>$airConditioning</td>
        </tr>

        <tr>
            <td>Ashtray</td>
            <td>$ashtray</td>
        </tr>
        
    </tbody>
</table>";
}

function readFromCSV() {
    $file = "3.csv";
    if(file_exists($file) && filesize($file) > 0) {
        $f = fopen($file, "r");
        if ($f === false) {
            die("Cannot open the file " . $file);
        }
        else {
            $lines = count(file($file));
            $firstLine = true;
        
            while (($row = fgetcsv($f)) !== false) {
                if ($firstLine == true) {
                    $firstLine = false;
                    continue;
                }
                $data = $row;
                
                echo 
                "<table class=\"styled-table\">
                    <thead>
                        <tr>
                            <th>Field</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Number of residents</td>
                            <td>$data[0]</td>
                        </tr>
                        
                        <tr>
                            <td>Name</td>
                            <td>$data[1]</td>
                        </tr>
        
                        <tr>
                            <td>Surname</td>
                            <td>$data[2]</td>
                        </tr>
        
                        <tr>
                            <td>City</td>
                            <td>$data[3]</td>
                        </tr>
        
                        <tr>
                            <td>Street</td>
                            <td>$data[4]</td>
                        </tr>
        
                        <tr>
                            <td>House</td>
                            <td>$data[5]</td>
                        </tr>
        
                        <tr>
                            <td>Email</td>
                            <td>$data[6]</td>
                        </tr>
        
                        <tr>
                            <td>Date</td>
                            <td>$data[7]</td>
                        </tr>
        
                        <tr>
                            <td>Child bed</td>
                            <td>$data[8]</td>
                        </tr>
        
                        <tr>
                            <td>Air conditioning</td>
                            <td>$data[9]</td>
                        </tr>
        
                        <tr>
                            <td>Ashtray</td>
                            <td>$data[10]</td>
                        </tr>
                    </tbody>
                </table>";
                
            }
        }
        fclose($f);
    }
    else {
        echo "Submit at least one form first!";
    }
    
    
}
?>