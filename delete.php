<?php
echo("jestes w delete.php <br>");
echo $_POST['id_pracownicy'];


$servername ="mysql-joannastanik.alwaysdata.net";
$username ="217138";
$password ="blkn7!J";
$dbname ="joannastanik_bazadanych";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM pracownicy WHERE id=".$_POST['id_pracownicy']";

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
