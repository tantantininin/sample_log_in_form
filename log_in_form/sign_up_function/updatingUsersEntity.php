<?php
if (isset($_POST["update"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdb";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $userid = $_POST['userid'];
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];
    $userAddress = $_POST['userAddress'];
    $userCity = $_POST['userCity'];
    $userBarangay = $_POST['userBarangay'];
    $userZip = $_POST['userZip'];

    // echo $userid; echo $userEmail; echo $userPassword; echo $userAddress; echo $userCity; echo $userBarangay; echo $userZip;
       $sql = "UPDATE `user_entity` SET user_email= '$userEmail', user_password= '$userPassword', user_address= '$userAddress', user_city= '$userCity', user_brgy= '$userBarangay', user_zip= '$userZip' WHERE userid = '$userid' ";
       $result = $conn->query($sql);
        echo $result;
    }else{
       echo "error";
}
