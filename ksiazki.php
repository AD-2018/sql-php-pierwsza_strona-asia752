<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
  <nav class="nav">
    <a class="link" href="https://github.com/AD-2018/sql-php-pierwsza_strona-asia752">Github</a>
    <a class="link" href="index.php">Strona Główna</a>
    <a class="link" href="orgPracownicy.php">Pracownicy i organizacja</a>
    <a class="link" href="funcAgregujace.php">Funkcje Agregujące</a>
    <a class="link" href="dataczas.php">Data i czas</a>
    <a class="link" href="formularz.html">Formularz</a>
    <a class="link" href="ksiazki.php">Książki</a>
  </nav>  
</head>
<body>
<?php
require_once("lib.php");
  
echo ("<br>Autorzy<br>");
$sql = "SELECT * FROM bibl_autor";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Id</th><th>Autor</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_autor'].'</td><td>'.$row['autor'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  
  echo ("<br>Tytuły<br>");
$sql = "SELECT * FROM bibl_tytul";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="2">');
    echo('<th>Id</th><th>Tytuł</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_tytul'].'</td><td>'.$row['tytul'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  
  echo ("<br>Książki<br>");
$sql = "SELECT id_book, autor, tytul FROM bibl_book, bibl_tytul, bibl_autor WHERE bibl_tytul.id_tytul = bibl_book.id_tytul AND bibl_autor.id_autor = bibl_book.id_autor";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Id</th><th>Autor</th><th>Tytuł</th><th>wypoz</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_book'].'</td><td>'.$row['autor'].'</td><td>'.$row['tytul'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    ?>
    </body>
    </html>
