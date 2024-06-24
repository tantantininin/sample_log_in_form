<?php

if (isset($_POST["update"])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdb";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $userid = $_POST['userid'];
    $username_sample = $_POST['username_sample'];
    $password_sample = $_POST['password_sample'];
//    echo $userid;
//    echo $username_sample;
//    echo $password_sample;
   $sql = "UPDATE `test_table` SET username= '$username_sample', password= '$password_sample' WHERE userid = '$userid' ";
   $result = $conn->query($sql);
    echo $result;
}else{
   echo "error";
 }

?>