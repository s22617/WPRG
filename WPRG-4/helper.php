<?php
session_start();
$residentsNumber = $_SESSION['residents-number'];
$name = $_SESSION["name"];
$surname = $_SESSION["surname"];
$city = $_SESSION["city"];
$street = $_SESSION["street"];
$house = $_SESSION["house"];
$email = $_SESSION["email"];
$date = $_SESSION["date"];
$childBed = $_SESSION["child-bed"];
$airConditioning = $_SESSION["air-conditioning"];
$ashtray = $_SESSION["ashtray"];

echo "
<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"style2.css\">
    </head>
    <body>
    <table class=\"styled-table\">
    
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
            </tr>";
            for ($i = 1; $i <= $residentsNumber; $i++) {
                $residentName = $_POST["$i-res-name"];
                $residentSurname = $_POST["$i-res-surname"];
                echo "
                <tr>
                <td>$i resident's name</td>
                <td>$residentName</td></tr>
                <tr>
                <td>$i resident's surname</td>
                <td>$residentSurname</td>";
            }
            echo "
            </tbody>
            </table>
            </body>
            </html>"
        ;
?>