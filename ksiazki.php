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
  
echo ("<br>Zad.1<br>");
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
  
  echo ("<br>Zad.1<br>");
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
  
  echo ("<br>Zad.3<br>");
$sql = "SELECT * FROM bibl_book";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Id</th><th>Id Autor</th><th>Id tytuł</th><wypoz</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id_book'].'</td><td>'.$row['id_autor'].'</td><td>'.$row['id_tytul'].'</td><td>'.$row['wypoz'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    ?>
    </body>
    </html>
