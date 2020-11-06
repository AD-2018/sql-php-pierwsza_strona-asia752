<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
    <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-asia752">Github</a>
    <div="nav">
      <a href="index.php">menu</a>
      <a href="funcAgregujace.php">funcAgregujace</a>
  </div> 
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
$sql = "SELECT imie, nazwa_dzial FROM pracownicy, organizacja where id_org=dzial";
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
$sql = "SELECT imie, nazwa_dzial FROM pracownicy, organizacja where id_org=dzial order by imie asc";
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
?>
</body>
</html>
