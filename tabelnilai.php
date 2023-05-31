<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat tabel pengulangan perkalian</title>
</head>
<body>
    <h1>perkalian angka sampai 100</h1>
</body>

<body>
<table border="1" cellpadding="10">
        <tr>
            <td>NILAI</td>
            <td>PERKALIAN</td>
        </tr>
            <?php
            $hasil;
for($i=1;$i<=100;$i++){
    $hasil = $i * $i;
    echo "<tr>";
    echo "<td>".$i."x".$i."</td>";
    echo "<td>".$hasil."</td>";
    echo "</tr>";
}
?>

       
    </table>

    
</body>
</html>