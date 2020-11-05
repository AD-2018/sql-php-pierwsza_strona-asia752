<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>
<?php
require_once("lib.php");
$sql = "SELECT * FROM pracownicy";
$result = mysqli_query($conn, $sql);

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
