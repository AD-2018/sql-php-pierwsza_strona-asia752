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
$sql = "select nazwa_dzial, min(YEAR(CURDATE())-YEAR(data_urodzenia)) as Wiek from pracownicy, organizacja where id_org=dzial and (nazwa_dzial='handel' or
nazwa_dzial='serwis') group by dzial";
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
$sql = "select imie, nazwa_dzial, max(YEAR(CURDATE())-YEAR(data_urodzenia)) as Wiek from pracownicy, organizacja where id_org=dzial and (nazwa_dzial='handel' or
nazwa_dzial='serwis') group by dzial";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Dział</th><th>Imie<th>Wiek</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['nazwa_dzial'].'</td><td>'.$row['imie'].'</td><td>'.$row['Wiek'].'</td>');
        echo('</tr>');
    }

echo('</table>');
  
echo("<br>Zad 12<br>");
$sql = "select imie, datediff(curdate(),data_urodzenia) as dni_zycia from pracownicy";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Dni życia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['dni_zycia'].'</td>');
        echo('</tr>');
    }

echo('</table>');
  
echo("<br>Zad 13<br>");
$sql = "select imie, data_urodzenia from pracownicy where imie not like '%a' order by data_urodzenia asc limit 1";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Data Urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['data_urodzenia'].'</td>');
        echo('</tr>');
    }

echo('</table>');
  
echo("<h2>Formatowanie dat</h2>");
 
echo("<br>Zad 1<br>");
$sql = "select imie, date_format(data_urodzenia, '%W-%m-%Y') as data from pracownicy";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Data Urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['data'].'</td>');
        echo('</tr>');
    }

echo('</table>');
  
echo("<br>Zad 2<br>");
$sql1 = "SET lc_time_names = 'pl_PL'";
$sql2 ="SELECT DATE_FORMAT(CURDATE(), '%W')as data";
echo($sql);

$result = mysqli_query($conn, $sql1);
$result = mysqli_query($conn, $sql2);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
echo('<th>Data</th>');

   while($row=mysqli_fetch_assoc($result)){
       echo('<tr>');
       echo('<td>'.$row['data'].'</td>');
       echo('</tr>');
   }

echo('</table>');
  
echo("<br>Zad 3<br>");
$sql = "select imie, date_format(data_urodzenia, '%W-%M-%Y') as data from pracownicy";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Data Urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['data'].'</td>');
        echo('</tr>');
    }

echo('</table>');
  
echo("<br>Zad 4<br>");
$sql = "select curtime(4) as data";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Data</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['data'].'</td>');
        echo('</tr>');
    }

echo('</table>');
  
echo("<br>Zad 5<br>");
$sql = "select imie, date_format(data_urodzenia, '%Y-%M-%W') as data from pracownicy";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Data Urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['data'].'</td>');
        echo('</tr>');
    }

echo('</table>');
  
echo("<br>Zad 6<br>");
$sql = "select imie, datediff(curdate(),data_urodzenia)*24 as godziny, datediff(curdate(),data_urodzenia)*24*60 as minuty from pracownicy";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>Imie</th><th>Data Urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td><td>'.$row['godziny'].'</td><td>'.$row['minuty'].'</td>');
        echo('</tr>');
    }

echo('</table>');
?>
</body>
</html>
