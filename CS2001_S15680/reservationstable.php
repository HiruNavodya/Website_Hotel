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
$sql = "CREATE TABLE reservations(
Day ENUM('Sunday','Monday','Tuesday','Wednessday','Thursday','Friday','Saturday')NOT NULL,
Hour ENUM('10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00','20:00','21:00','22:00','23:00')NOT NULL,
Name VARCHAR(30) NOT NULL,
Phone_Number INT(15) NOT NULL,
No_of_Adults INT(3) NOT NULL,
No_of_Children INT(3) NOT NULL

)";

if (mysqli_query($conn, $sql)) {
  echo "Table reservations created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 