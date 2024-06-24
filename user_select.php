<?php

if (isset($_POST["show"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);


    $username_sample = $_POST['username_sample'];
    $password_sample = $_POST['password_sample'];

    // echo $username_sample;
    // echo $password_sample;
    $sql = "SELECT * FROM `test_table` WHERE username ='$username_sample' and password = '$password_sample'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["userid"] . " - Name: " . $row["fname"] . " " . $row["lname"] . "<br>" . "username:" . " " . $row["username"] . "<br>" . "password:" ." " . $row["password"] . "<br>";
        }
    }
} else {
    echo "error";
}
