<?php

if (isset($_POST["submit"])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdb";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $username_sample = $_POST['username_sample'];
    $password_sample = $_POST['password_sample'];
    $hashpassword = md5($password_sample);
     
    
    $sql = "INSERT INTO `test_table`(`userid`, `username`, `password`, `fname`, `lname`) VALUES ('','$username_sample','$hashpassword','$firstname','$lastname')";
    $result = $conn->query($sql);
    echo "$result";
}else{
    echo "error";
}
?>