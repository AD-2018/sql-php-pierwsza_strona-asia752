<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width">
  <title>Dane do Bazy</title>
</head>
<body>

	<h3>dodawanie pracownika</h3>
	<form action="insert.php" method="POST">
		<label>Imie</label><input type="text" name="imie"></br>
		<label>Dzial</label><input type="number" name="dzial"></br>
		<label>zarobki</label><input type="number" name="zarobki"></br>
		<input type="date" name="data_urodzenia"></br>
		<input type="submit" value="dodaj pracownika">
	</form>
<h3>usuwanie pracownika</h3>
	<form action="delete.php" method="POST">
  		<input type="number" name="id"></br>
   		<input type="submit" value="Zapisz w zmiennej $_POST['id_prawownicy']">
</form>
<?php
require_once("lib.php");
 echo ("<br>Zad.1<br>");
$sql = "SELECT * FROM pracownicy";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
echo('<th>Id</th><th>Imie</th><th>zarobki</th><th>dzial</th><th>Data urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_pracownicy'].'</td>'.'<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td>'.'<td>'.$row['dzial'].'</td>'.'<td>'.$row['data_urodzenia'].'</td>'.
	     
	     '<td>
	    
	     <form action="delete.php" method="POST">
  		<input type="number" name="id" value=".$row['id_pracownicy']"></br>
   		<input type="submit" value="Zapisz w zmiennej dolar_POST">
	</form>
	     
	     </td>');
	    
        echo('</tr>');
    }
  echo('</table>');
?>
</body>
</html>
