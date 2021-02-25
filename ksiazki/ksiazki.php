<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/style.css"> 
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

  <h3>dodawanie autora</h3>
	<form action="/ksiazki/insertautor.php" method="POST">
		<label>Autor</label><input type="text" name="autor"></br>
		<input type="submit" value="dodaj autora">
	</form>

  <h3>usuwanie autora</h3>
	<form action="/ksiazki/deleteautor.php" method="POST">
  		<input type="number" name="id"></br>
   		<input type="submit" value="usuń autora">
	</form>

  <h3>dodawanie tytułu</h3>
	<form action="/ksiazki/inserttytul.php" method="POST">
		<label>Tytul</label><input type="text" name="tytul"></br>
		<input type="submit" value="dodaj tytul">
	</form>

  <h3>usuwanie tytułu</h3>
<form action="/ksiazki/deletetytul.php" method="POST">
    <input type="number" name="id"></br>
     <input type="submit" value="usuń tytul">
</form>

<?php
require_once("../lib.php");
  
  echo ("<br>Autorzy<br>");
$sql = "SELECT * FROM bibl_autor";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


echo('<select name="Autor">');

    while($row=mysqli_fetch_assoc($result)){
        echo'<option value="'.$row['id_autor'].'">';
        echo($row['autor']);
        echo"</option>"; 
    }
echo('</select>');
  echo("<br>");
  
  echo ("<br>Tytuły<br>");
$sql = "SELECT * FROM bibl_tytul";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<select name="Tytuł">');

    while($row=mysqli_fetch_assoc($result)){
        echo'<option value="'.$row['id_tytul'].'">';
        echo($row['tytul']);
        echo"</option>"; 
    }
echo('</select>');
  echo("<br>");

  echo ("<br>Autorzy tabela<br>");
  $sql = "SELECT * FROM bibl_autor";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    echo('<table border="1">');
    echo('<th>Id</th><th>Autor</th><th>Usuwanie</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_autor'].'</td><td>'.$row['autor'].'</td>'.

        '<td>
	    
          <form action="deleteautor.php" method="POST">
         <input type="text" name="id" value="'.$row['id_autor'].'" hidden>
          <input type="submit" value="Usuń">
     </form>

     </td>');
        echo('</tr>');
    }

    echo('</table>');

    echo ("<br>Tytuły tabela<br>");
    $sql = "SELECT * FROM bibl_tytul";
  echo ("<li>".$sql);
    $result = mysqli_query($conn, $sql);
      if ( $result) {
          echo "<li>ok";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
  
      echo('<table border="1">');
      echo('<th>Id</th><th>Tytuł</th><th>Usuwanie</th>');
  
      while($row=mysqli_fetch_assoc($result)){
          echo('<tr>');
          echo('<td>'.$row['id_tytul'].'</td><td>'.$row['tytul'].'</td>'.

          '<td>
	    
          <form action="deletetytul.php" method="POST">
         <input type="text" name="id" value="'.$row['id_tytul'].'" hidden>
          <input type="submit" value="Usuń">
     </form>
          
          </td>');
          echo('</tr>');
      }
  
      echo('</table>');
      
  echo ("<br>Książki<br>");
$sql = "SELECT id_book, autor, tytul FROM bibl_book, bibl_tytul, bibl_autor WHERE bibl_tytul.id_tytul = bibl_book.id_tytul AND bibl_autor.id_autor = bibl_book.id_autor order by id_book asc";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Id</th><th>Autor</th><th>Tytuł</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_book'].'</td><td>'.$row['autor'].'</td><td>'.$row['tytul'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    ?>
      </div>
    </body>
    </html>
