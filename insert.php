<?php
echo("jestes w insert.php");
echo "<li>".$_POST['name'];
echo "<li>".$_POST['dzial'];
echo "<li>".$_POST['zarobki'];
echo "<li>".$_POST['data_urodzenia'];

$servername ="mysql-joannastanik.alwaysdata.net";
$username ="217138";
$password ="blkn7!J";
$dbname ="joannastanik_bazadanych";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
       VALUES (null, '".$_POST['imie']."', '".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_urodzenia']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
