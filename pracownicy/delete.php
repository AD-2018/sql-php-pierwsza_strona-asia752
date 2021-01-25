<?php
echo("jestes w delete.php <br>");
echo $_POST['id'];

require_once("https://github.com/AD-2018/sql-php-pierwsza_strona-asia752/lib.php");

$sql = "DELETE FROM pracownicy WHERE id_pracownicy=".$_POST['id'];

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header('Location: https://stanikjoanna.herokuapp.com/daneDoBazy.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
