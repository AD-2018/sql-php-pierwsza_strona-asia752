<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-asia752">Github</a>
  <nav class="nav">
    <a href="index.php">Strona Główna</a>
    <a href="orgPracownicy.php">Pracownicy i organizacja</a>
    <a href="funcAgregujace.php">Funkcje Agregujące</a>
    <a href="dataczas.php">Data i czas</a>
  </nav>  
  <h1>Joanna Stanik nr 12</h1>
<?php
require_once("lib.php");
 
  echo ("<br>Zad.1<br>");
$sql = "SELECT * FROM pracownicy WHERE dzial=2";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td>'.'<td>'.$row['dzial'].'</td>');
        echo('</tr>');
    }
  echo('</table>');
  
    echo ("<br>Zad.2<br>");
$sql = "SELECT * FROM pracownicy WHERE dzial=2 or dzial=3";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th><th>dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td>'.'<td>'.$row['dzial'].'</td>');
        echo('</tr>');
    }
  echo('</table>');
  
    echo ("<br>Zad.3<br>");
$sql = "SELECT * FROM pracownicy WHERE zarobki<30";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td>');
        echo('</tr>');
    }
  echo('</table>');

?>
</body>
</html>
