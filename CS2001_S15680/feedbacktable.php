 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jaurim_hotel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE feedback(
name VARCHAR(30) NOT NULL,
email VARCHAR(20) NOT NULL,
country ENUM('South Korea','Australia','Canada','USA')NOT NULL,
inquiry TEXT NOT NULL

)";

if (mysqli_query($conn, $sql)) {
  echo "Table feedback created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 