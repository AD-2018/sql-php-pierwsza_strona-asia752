<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require_once("lib.php");
echo ("Zad.1");
$sql = "SELECT * FROM pracownicy";
echo ($sql);
  $result = mysqli_query($conn, $sql);
    if ( $result === TRUE) {
        echo "ok";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
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
