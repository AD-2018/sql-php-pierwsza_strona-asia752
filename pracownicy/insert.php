<?php
echo("jestes w insert.php");
echo "<li>".$_POST['imie'];
echo "<li>".$_POST['dzial'];
echo "<li>".$_POST['zarobki'];
echo "<li>".$_POST['data_urodzenia'];

require_once("../lib.php");

$sql = "INSERT INTO pracownicy (id_pracownicy, imie, dzial, zarobki, data_urodzenia) 
       VALUES (null, '".$_POST['imie']."', '".$_POST['dzial']."','".$_POST['zarobki']."','".$_POST['data_urodzenia']."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location: https://stanikjoanna.herokuapp.com/pracownicy/daneDoBazy.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
