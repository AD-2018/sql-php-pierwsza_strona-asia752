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
      <a class="github" href="https://github.com/AD-2018/sql-php-pierwsza_strona-asia752">Github</a>
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
<?php
require_once("../lib.php");
  
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
$sql = "SELECT nazwa_dzial, avg(zarobki) as srednia from pracownicy, organizacja where id_org=dzial group by dzial having avg(zarobki)<28";
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
$sql = "SELECT nazwa_dzial, avg(zarobki) as srednia from pracownicy, organizacja where id_org=dzial and imie not like '%a' group by dzial having avg(zarobki)<30";
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
$sql = "SELECT nazwa_dzial, count(imie) as ilosc from pracownicy, organizacja where id_org=dzial group by dzial having count(imie)>3";
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
      </div>
</body>
</html>
