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
        echo('<td>'.$row['imie'].'</td>'.'<td>'.$row['data_urodzenia'].'</td>'.'<td>'.$row['wiek'].'</td>');
        echo('</tr>');
    }

    echo('</table>');
  

  ?>
  </body>
</html>
