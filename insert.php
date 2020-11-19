<?php

$servername ="mysql-joannastanik.alwaysdata.net";
$username ="217138";
$password ="blkn7!J";
$dbname ="joannastanik_bazadanych";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Pracownik (null, imie, dzial, zarobki) 
       VALUES (null,'Ksawery', 3, 36,'1995-10-21')";

$conn->query($sql);

$conn->close();
?>
