<?php
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
echo "Connected successfully";

$sql = "INSERT INTO `test_table`(`userid`, `fname`, `lname`) VALUES ('[value-1]','[value-2]','[value-3]')";
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["userid"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
$conn->close();
?>
