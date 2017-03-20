<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Sutthiporn', 'Suthamma', 'melody-za3699@hotmail.com')";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('Sutti', 'jaipong', 'tar@hotmail.com')";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('Pornpahn', 'Wongward', 'ple@hotmail.com')";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('Chonthicha', 'yimyim', 'namanam@hotmail.com')";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('BEE', 'Mari', 'mari@hotmail.com')";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email)VALUES ('Bowii', 'dokdok', 'dok@hotmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
