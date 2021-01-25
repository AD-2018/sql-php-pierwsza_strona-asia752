<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/style.css">
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
    <a class="link" href="/książki/ksiazki.php">Książki</a>
  </div> 
  <div class="strona">
<?php
require_once("https://github.com/AD-2018/sql-php-pierwsza_strona-asia752/lib.php");
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
$sql = "SELECT imie, nazwa_dzial FROM pracownicy, organizacja where id_org=dzial and (dzial=1 or dzial=4)";
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
    
    echo ("<br>Zad.1<br>");
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
    
echo ("<br>Zad.2<br>");
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
    
    echo ("<br>Zad.3<br>");
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
  
  echo ("<br>Zad.4<br>");
$sql = "SELECT imie, zarobki, nazwa_dzial FROM pracownicy, organizacja where id_org=dzial and imie like '%a' and (dzial=1 or dzial=3) order by zarobki asc";
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
  
    echo ("<br>Zad.5<br>");
$sql = "SELECT imie, zarobki, nazwa_dzial FROM pracownicy, organizacja WHERE id_org=dzial and imie NOT LIKE '%a' order by  nazwa_dzial asc, zarobki asc";
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
  
  echo("<h2>Limit</h2>");
  
  echo ("<br>Zad.1<br>");
$sql = "SELECT imie, nazwa_dzial, zarobki FROM pracownicy, organizacja WHERE id_org=dzial and dzial=4 order by zarobki desc limit 2";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Imie</th><th>dzial</th><th>zarobki</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>'.'<td>'.$row['zarobki'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  
  echo ("<br>Zad.2<br>");
$sql = "SELECT imie, nazwa_dzial, zarobki FROM pracownicy, organizacja WHERE id_org=dzial and imie like '%a' and (dzial=4 or dzial=2) order by zarobki desc limit 3";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Imie</th><th>dzial</th><th>zarobki</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>'.'<td>'.$row['zarobki'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  
  echo ("<br>Zad.3<br>");
$sql = "SELECT imie, nazwa_dzial, data_urodzenia FROM pracownicy, organizacja WHERE id_org=dzial order by data_urodzenia asc limit 1";
echo ("<li>".$sql);
  $result = mysqli_query($conn, $sql);
    if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  

echo('<table border="1">');
    echo('<th>Imie</th><th>dzial</th><th>data_urodzenia</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['nazwa_dzial'].'</td>'.'<td>'.$row['data_urodzenia'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
?>
      </div>
</body>
</html>
