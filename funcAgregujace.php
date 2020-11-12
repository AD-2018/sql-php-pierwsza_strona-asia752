<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
  <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-asia752">Github</a>
  <nav class="nav">
    <a href="index.php">Strona Główna</a>
    <a href="orgPracownicy.php">Pracownicy i organizacja</a>
    <a href="funcAgregujace.php">Funkcje Agregujące</a>
    <a href="dataczas.php">Data i czas</a>
  </nav>   
  <h1>Joanna Stanik nr 12</h1> 
</head>
<body>
<?php
require_once("lib.php");
  
echo ("<br>Zad.1<br>");
$sql = "SELECT sum(zarobki) as suma from pracownicy";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Suma</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  
  echo ("<br>Zad.2<br>");
$sql = "SELECT sum(zarobki) as suma from pracownicy where imie like '%a'";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Suma</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  
  echo ("<br>Zad.3<br>");
$sql = "SELECT dzial, sum(zarobki) as suma from pracownicy where imie not like '%a' and (dzial=2 or dzial=3)";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Dział</th><th>Suma</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['dzial'].'</td>'.'<td>'.$row['suma'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  
  echo ("<br>Zad.4<br>");
$sql = "SELECT avg(zarobki) as srednia from pracownicy where imie not like '%a'";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Średnia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['srednia'].'</td>');
        echo('</tr>');
    }
  echo('</table>');
  
    echo ("<br>Zad.5<br>");
$sql = "SELECT avg(zarobki) as srednia from pracownicy where dzial=4";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Średnia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['srednia'].'</td>');
        echo('</tr>');
    }
  echo('</table>');
  
  echo ("<br>Zad.6<br>");
$sql = "SELECT avg(zarobki) as srednia from pracownicy where imie not like '%a' and (dzial=1 or dzial=2)";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Średnia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['srednia'].'</td>');
        echo('</tr>');
    }
  echo('</table>');
  
  echo ("<br>Zad.7<br>");
$sql = "SELECT count(imie) as ilosc from pracownicy";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Ilość</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['ilosc'].'</td>');
        echo('</tr>');
    }
  echo('</table>');
  
  echo ("<br>Zad.8<br>");
$sql = "SELECT count(imie) as ilosc from pracownicy where imie like '%a' and (dzial=1 or dzial=3)";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Ilość</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['ilosc'].'</td>');
        echo('</tr>');
    }
  echo('</table>');
  
echo("<h2>Group by</h2>");
  
  echo ("<br>Zad.1<br>");
$sql = "SELECT nazwa_dzial, sum(zarobki) as suma from pracownicy, organizacja where id_org=dzial group by dzial";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Dział</th><th>Suma</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td>'.'<td>'.$row['suma'].'</td>');
        echo('</tr>');
    }
  echo('</table>');
  
 echo ("<br>Zad.2<br>");
$sql = "SELECT nazwa_dzial, count(imie) as ilosc from pracownicy, organizacja where id_org=dzial group by dzial";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Dział</th><th>Ilość</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td>'.'<td>'.$row['ilosc'].'</td>');
        echo('</tr>');
    }
  echo('</table>');
  
  echo ("<br>Zad.3<br>");
$sql = "SELECT nazwa_dzial, avg(zarobki) as srednia from pracownicy, organizacja where id_org=dzial group by dzial";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Dział</th><th>Średnia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td>'.'<td>'.$row['srednia'].'</td>');
        echo('</tr>');
    }
  echo('</table>');
  
    echo ("<br>Zad.4<br>");
$sql = "SELECT sum(zarobki) as suma, if( (imie LIKE '%a'), 'Kobiety','Mężczyźni') as 'plec' FROM `pracownicy` GROUP by plec";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>plec</th><th>Suma</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['plec'].'</td>'.'<td>'.$row['suma'].'</td>');
        echo('</tr>');
    }
  echo('</table>');
  
  echo ("<br>Zad.5<br>");
$sql = "SELECT avg(zarobki) as srednia, if( (imie LIKE '%a'), 'Kobiety','Mężczyźni') as 'plec' FROM `pracownicy` GROUP by plec";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>plec</th><th>Średnia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['plec'].'</td>'.'<td>'.$row['srednia'].'</td>');
        echo('</tr>');
    }
  echo('</table>');
  
  echo("<h2>Having</h2>");
  
    echo ("<br>Zad.1<br>");
$sql = "SELECT nazwa_dzial, avg(zarobki) as srednia from pracownicy, organizacja where id_org=dzial having avg(zarobki)<28 group by dzial";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Dział</th><th>Średnia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td>'.'<td>'.$row['srednia'].'</td>');
        echo('</tr>');
    }
  echo('</table>');

     echo ("<br>Zad.2<br>");
$sql = "SELECT nazwa_dzial, avg(zarobki) as srednia from pracownicy, organizacja where id_org=dzial and imie not lika '%a' having avg(zarobki)<30 group by dzial";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Dział</th><th>Średnia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td>'.'<td>'.$row['srednia'].'</td>');
        echo('</tr>');
    }
  echo('</table>');
  
     echo ("<br>Zad.3<br>");
$sql = "SELECT nazwa_dzial, count(imie) as ilosc from pracownicy, organizacja where id_org=dzial having count(imie)>3 group by dzial";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
echo('<table border="1">');
    echo('<th>Dział</th><th>Ilość</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td>'.'<td>'.$row['ilosc'].'</td>');
        echo('</tr>');
    }
  echo('</table>');
?>
</body>
</html>
