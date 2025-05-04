<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vjezba json</title>
</head>
<body>
    <h1>Vježba json</h1>

    <?php
    $osobeJson = file_get_contents('osobe.json');
    
    $osobe = json_decode($osobeJson, true);
    //var_dump($osobe);


    ?>


    <table border="1">
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Godine</th>
            <th>Email</th>
            <th>Telefon</th>
        </tr>
        <tr>
            <?php
                foreach($osobe as $osoba) {
                    echo "<tr>";
                    foreach($osoba as $value) {
                        echo "<td>" . $value . "</td>";
                    }
                    echo "</tr>";
                }
                
            ?>
        </tr>
    </table>

</body>
</html>