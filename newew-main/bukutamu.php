<?php
$servername = "localhost";
$usernamedb = "root";
$passworddb = "";
$dbname = "bukutamu";

$nama = $_POST["nama"];
$email = $_POST["email"];
$pesan = $_POST["pesan"];
// Create connection
$conn = new mysqli($servername, $usernamedb, $passworddb, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pesan (nama, email, pesan)
VALUES ('$nama', '$email', '$pesan')";

if ($conn->query($sql) === TRUE) {
  echo '<script type="text/JavaScript"> 
     window.location.href = "bukutamu.html";
     alert("Pesan Dikirim");
     </script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>