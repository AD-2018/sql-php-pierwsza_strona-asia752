<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
  <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-asia752">Github</a>
  <div="nav">
    <a href="index.php">Strona Główna</a>
    <a href="funcAgregujace.php">Funkcje Agregujące</a>
  </div>  
  <h1>Joanna Stanik nr 12</h1>
</head>
<body>
<?php
require_once("lib.php");
echo ("<br>Zad.1<br>");
$sql = "SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE id_org=dzial";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Imie</th><th>dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo ("<br>Zad.2<br>");
$sql = "SELECT imie, nazwa_dzial FROM pracownicy, organizacja where id_org=dzial and dzial=1 or dzial=4";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Imie</th><th>dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo ("<br>Zad.3<br>");
$sql = "SELECT imie, nazwa_dzial FROM pracownicy, organizacja where id_org=dzial and imie like '%a'";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Imie</th><th>dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    echo ("<br>Zad.4<br>");
$sql = "SELECT imie, nazwa_dzial FROM pracownicy, organizacja where id_org=dzial and imie not like '%a'";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Imie</th><th>dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo("<h2>Sortowanie</h2>");
    
    echo ("<br>Zad.5<br>");
$sql = "SELECT imie, nazwa_dzial FROM pracownicy, organizacja where id_org=dzial order by imie desc";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Imie</th><th>dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
echo ("<br>Zad.6<br>");
$sql = "SELECT imie, nazwa_dzial FROM pracownicy, organizacja where id_org=dzial and dzial=3 order by imie asc";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Imie</th><th>dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
    
    echo ("<br>Zad.7<br>");
$sql = "SELECT imie, nazwa_dzial FROM pracownicy, organizacja where id_org=dzial and imie like '%a' order by imie asc";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Imie</th><th>dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  
  echo ("<br>Zad.8<br>");
$sql = "SELECT imie, nazwa_dzial FROM pracownicy, organizacja where id_org=dzial and imie like '%a' and (dzial=1 or dzial=3) order by zarobki asc";
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
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  
    echo ("<br>Zad.9<br>");
$sql = "SELECT imie, nazwa_dzial FROM pracownicy, organizacja WHERE id_org=dzial and imie NOT LIKE '%a' order by  nazwa_dzial asc, zarobki asc";
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
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['zarobki'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
?>
</body>
</html>
