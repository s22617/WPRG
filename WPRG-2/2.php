<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
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
    </body>
</html> 

<?php
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
    $city= $_POST["city"];
    $street = $_POST["street"];
    $house= $_POST["house"];
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

?>