<?php 
if (isset($_POST["sign-up"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdb";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['user_email'], $_POST['user_password'], $_POST['user_address'], $_POST['user_city'], $_POST['user_brgy'], $_POST['user_zip'])) {
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $user_address = $_POST['user_address'];
        $user_city = $_POST['user_city'];
        $user_brgy = $_POST['user_brgy'];
        $user_zip = $_POST['user_zip'];

        // Use a secure password hashing method
        $hashpassword = password_hash($user_password, PASSWORD_DEFAULT);

        // Use a prepared statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO `user_entity`(`userid`, `user_email`, `user_password`, `user_address`, `user_city`, `user_brgy`, `user_zip`) VALUES (NULL, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $user_email, $hashpassword, $user_address, $user_city, $user_brgy, $user_zip);

        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Some fields are missing.";
    }

    $conn->close();
} else {
    echo "Form not submitted correctly.";
}
?>
