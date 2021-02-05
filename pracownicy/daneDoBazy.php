<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/style.css">
  <meta name="viewport" content="width=device-width">
  <title>Joanna Stanik</title>
  <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
<link rel="manifest" href="/img/site.webmanifest">
</head>
<body>
	  <div class="container">
    <div class="tytul">
      <a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-asia752">Github</a>
      <div class="imie">
      <h1>Joanna Stanik nr 12</h1>
    </div>
  </div>  
  <div class="menu">
  <a class="link" href="/index.php">Strona Główna</a>
    <a class="link" href="/pracownicy/orgPracownicy.php">Pracownicy i organizacja</a>
    <a class="link" href="/pracownicy/funcAgregujace.php">Funkcje Agregujące</a>
    <a class="link" href="/pracownicy/dataczas.php">Data i czas</a>
    <a class="link" href="/pracownicy/formularz.html">Formularz</a>
    <a class="link" href="/pracownicy/daneDoBazy.php">Dane do bazy</a>
    <a class="link" href="/ksiazki/ksiazki.php">Książki</a>
  </div> 
  <div class="strona">

	<h3>dodawanie pracownika</h3>
	<form action="/pracownicy/insert.php" method="POST">
		<label>Imie</label><input type="text" name="imie"></br>
		<label>Dzial</label><input type="number" name="dzial"></br>
		<label>zarobki</label><input type="number" name="zarobki"></br>
		<label>Data urodzenia</label><input type="date" name="data_urodzenia"></br>
		<input type="submit" value="dodaj pracownika">
	</form>
	<h3>usuwanie pracownika</h3>
	<form action="/pracownicy/delete.php" method="POST">
  		<input type="number" name="id"></br>
   		<input type="submit" value="usuń pracownika">
	</form>
<?php
require_once("../lib.php");
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
echo('<th>Id</th><th>Imie</th><th>zarobki</th><th>dzial</th><th>Data urodzenia</th><th>Usuwanie</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_pracownicy'].'</td>'.'<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td>'.'<td>'.$row['dzial'].'</td>'.'<td>'.$row['data_urodzenia'].'</td>'.
	     
	     '<td>
	    
	     <form action="delete.php" method="POST">
  		<input type="name" name="id" value="'.$row['id_pracownicy'].'" hidden>
   		<input type="submit" value="Usuń">
	</form>
	     
	     </td>');
	    
        echo('</tr>');
    }
  echo('</table>');
?>
</div>
</body>
</html>
