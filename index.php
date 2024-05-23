<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "users";

// Create connection

$conn = new mysqli($servername, $username, $password, $db);
//establish connection
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo 'connected to database....';
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$age = $_REQUEST['age'];
$phonenumber = $_REQUEST['phonenumber'];
$password = $_REQUEST['password'];
// insert data
$insert = "INSERT INTO registeredusers (name , email, age, phonenumber, password)
VALUES ('$username', '$email', '$age', '$phonenumber', '$password');";

if ($conn->query($insert) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $insert . "<br>" . $conn->error;
}
echo "<br>";
$select = "SELECT name, email FROM registeredusers";
$result = $conn->query($select);

if ($result->num_rows > 0) {
  // Start table and headers
  echo "<h2>Stored Data</h2>";
  echo "<table>
  <tr>
      <th>Name</th>
      <th>Email</th>
  </tr>";
  echo "<style>
   table,th,td,tr{
    border:1px solid white;
    border-collapse:collapse;
    color:white;
   }
   th{
    background: lightblue;
   }
   tr{
    background:black;
   }
 </style>";
  // Output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "<tr>
          <td>" . htmlspecialchars($row["name"]) . "</td>
          <td>" . htmlspecialchars($row["email"]) . "</td>
      </tr>";
  }

  // End table
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>