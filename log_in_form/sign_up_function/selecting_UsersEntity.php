<?php
if (isset($_POST["showInformation"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);


    $username_sample = $_POST['userEmail'];
    $password_sample = $_POST['userPassword'];

    // echo $username_sample;
    // echo $password_sample;
    
    $sql = "SELECT * FROM `user_entity` WHERE user_email ='$username_sample' and user_password = '$password_sample'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["userid"] . "<br>" ."Username: " . $row["user_email"] . "<br>" . "Address: " . $row["user_address"] . "<br>" . "City:" . $row["user_city"] . "<br>" . "Barangay: " . $row["user_brgy"] . "<br>" . "Zip: " . $row["user_zip"] ;
        }
    }
} else {
    echo "error";
}
