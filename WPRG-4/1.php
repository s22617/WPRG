<!DOCTYPE html>
<?php
$cookie_name = "user";
$cookie_value = "test";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
    <head>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <form method="POST" style="margin: auto;">
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
session_start();
if (isset($_COOKIE[$cookie_name])) {
    echo "Your cookie is already set! Cookie's name: $cookie_name Cookie's value: $cookie_value";
}
if (isset($_POST["residents-number"]) &&
    !empty($_POST["name"]) &&
    !empty($_POST["surname"]) &&
    !empty($_POST["city"]) &&
    !empty($_POST["street"]) &&
    !empty($_POST["house"]) &&
    !empty($_POST["email"]) &&
    !empty($_POST["date"])) {

    echo "<form method=\"POST\" action=\"helper.php\">";
    for ($i = 1; $i <= $_POST["residents-number"]; $i++) {
        echo "
            <label>$i resident's name:</label>
            <input type=\"text\" name=\"$i-res-name\"></input><br>
            <label>$i resident's surname</label>
            <input type=\"text\" name=\"$i-res-surname\"></input><br>";
    }
    echo "<input type=\"submit\"></form>";

    $_SESSION["residents-number"] = $_POST["residents-number"];
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["surname"] = $_POST["surname"];
    $_SESSION["city"]= $_POST["city"];
    $_SESSION["street"] = $_POST["street"];
    $_SESSION["house"]= $_POST["house"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["date"] = $_POST["date"];

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
        $airConditioning = "included";
    }
    $_SESSION["child-bed"] = $childBed;
    $_SESSION["air-conditioning"] = $airConditioning;
    $_SESSION["ashtray"] = $ashtray;

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
