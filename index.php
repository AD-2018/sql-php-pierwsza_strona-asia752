<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-asia752">Github</a>
  <div="nav">
    <a href="orgPracownicy.php">orgPracownicy</a>
    <a href="funcAgregujace.php">funcAgregujace</a>
  </div>  
  <h1>Joanna Stanik nr 12</h1>
<?php
require_once("lib.php");
 
echo ("<br>Zad.2<br>");
$sql = "SELECT * FROM pracownicy WHERE dzial=2 and dzial=3";
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

?>
</body>
</html>
