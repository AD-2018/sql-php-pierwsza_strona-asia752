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
$sql = "SELECT imie, data_urodzenia, year(curdate())-year(data_urodzenia) as wiek from pracownicy";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>imie</th><th>data urodzenia</th><th>wiek</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['data_urodzenia'].'</td><td>'.$row['wiek'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  
echo("<br>Zad 2 <br>");
$sql = "select imie ,YEAR(CURDATE())-YEAR(data_urodzenia) as wiek, nazwa_dzial from pracownicy, organizacja where id_org=dzial and nazwa_dzial='serwis'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Wiek</th><th>Dzial</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['wiek'].'</td><td>'.$row['nazwa_dzial'].'</td>');
        echo('</tr>');
    }

echo('</table>');
  
echo("<br>Zad 3<br>");
$sql = "select sum(YEAR(CURDATE())-YEAR(data_urodzenia)) as sumaLat from pracownicy";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Suma Lat</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['sumaLat'].'</td>');
        echo('</tr>');
    }

echo('</table>');
  
echo("<br>Zad 4<br>");
$sql = "select sum(YEAR(CURDATE())-YEAR(data_urodzenia)) as sumaLat from pracownicy, organizacja where id_org=dzial and nazwa_dzial='handel'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Suma Lat</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['sumaLat'].'</td>');
        echo('</tr>');
    }

echo('</table>');
  
echo("<br>Zad 5<br>");
$sql = "select sum(YEAR(CURDATE())-YEAR(data_urodzenia)) as sumaLat from pracownicy where imie like '%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Suma Lat</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['sumaLat'].'</td>');
        echo('</tr>');
    }

echo('</table>');
  
echo("<br>Zad 6<br>");
$sql = "select sum(YEAR(CURDATE())-YEAR(data_urodzenia)) as sumaLat from pracownicy where imie not like '%a'";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Suma Lat</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['sumaLat'].'</td>');
        echo('</tr>');
    }

echo('</table>');
  
echo("<br>Zad 7<br>");
$sql = "select nazwa_dzial, avg(YEAR(CURDATE())-YEAR(data_urodzenia)) as sredniaLat from pracownicy, organizacja where id_org=dzial group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dział</th><th>Średnia Lat</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td><td>'.$row['sredniaLat'].'</td>');
        echo('</tr>');
    }

echo('</table>');
  
echo("<br>Zad 8<br>");
$sql = "select nazwa_dzial, sum(YEAR(CURDATE())-YEAR(data_urodzenia)) as sumaLat from pracownicy, organizacja where id_org=dzial group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dział</th><th>Suma Lat</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td><td>'.$row['sumaLat'].'</td>');
        echo('</tr>');
    }

echo('</table>');

echo("<br>Zad 9<br>");
$sql = "select nazwa_dzial, max(YEAR(CURDATE())-YEAR(data_urodzenia)) as Wiek from pracownicy, organizacja where id_org=dzial group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dział</th><th>Wiek</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td><td>'.$row['Wiek'].'</td>');
        echo('</tr>');
    }

echo('</table>');
  
echo("<br>Zad 10<br>");
$sql = "select nazwa_dzial, min(YEAR(CURDATE())-YEAR(data_urodzenia)) as Wiek from pracownicy, organizacja where id_org=dzial and nazwa_dzial='handel' or nazwa_dzial='serwis group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dział</th><th>Wiek</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td><td>'.$row['Wiek'].'</td>');
        echo('</tr>');
    }

echo('</table>');
  
echo("<br>Zad 11<br>");
$sql = "select imie, nazwa_dzial, max(YEAR(CURDATE())-YEAR(data_urodzenia)) as Wiek from pracownicy, organizacja where id_org=dzial and nazwa_dzial='handel' or nazwa_dzial='serwis' group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dział</th><th>Wiek</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td><td>'.$row['Wiek'].'</td>');
        echo('</tr>');
    }

echo('</table>');
?>
</body>
</html>
