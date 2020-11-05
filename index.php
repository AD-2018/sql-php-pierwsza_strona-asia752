<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <a href="https://github.com/AD-2018/sql-php-pierwsza_strona-asia752">Github</a>
<?php
require_once("lib.php");
echo ("<br>Zad.1<br>");
$sql = "SELECT * FROM pracownicy";
echo ($sql);
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
