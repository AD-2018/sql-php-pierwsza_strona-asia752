<?php
echo("jestes w deletetytul.php <br>");
echo $_POST['id'];

require_once("../lib.php");

$sql = "DELETE FROM bibl_tytul WHERE id_tytul=".$_POST['id'];

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: https://stanikjoanna.herokuapp.com/ksiazki/ksiazki.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
