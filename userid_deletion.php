<?php
if (isset($_POST["submit_delete"])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdb";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $userid = $_POST['userid'];
    // echo $userid;
    
   $sql = "DELETE FROM `test_table` WHERE userid=$userid";
   $result = $conn->query($sql);
    echo $result;
}else{
    echo "error";
}
?>