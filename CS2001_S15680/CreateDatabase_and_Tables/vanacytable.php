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
$sql = "CREATE TABLE vacancies (
Fullname VARCHAR(30) NOT NULL,
Nic INT(15) NOT NULL,
Email VARCHAR(30) NOT NULL,
Job_Category ENUM('Manager','Hotel Receptionist','Chef','Waiter')NOT NULL,
Tel_no INT(15) NOT NULL,
gender ENUM('Male','Female')NOT NULL

)";

if (mysqli_query($conn, $sql)) {
  echo "Table vacancies created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 