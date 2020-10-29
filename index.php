<?php
$servername ="mysql-joannastanik.alwaysdata.net";
$username ="217138";
$password ="07052002As!a";
$dbname ="joannastanik_bazadanych";

$conn = new mysqli($servername, $username, $password, $dbname);
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
