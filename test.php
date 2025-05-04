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
    
    foreach($osobe as $osoba) {
        echo "<div>";
        foreach($osoba as $vrijednost) {
            echo "<p>" . $vrijednost . "</p>";
        }
        echo "</div>";
    }


    ?>

 <form action="/dodajKnjigu.php" method="post">

 <label for="">
    Autor:
    <input type="text" name="autor" id="">
 </label>
 <br><br>

 <label for="">
    Naslov:
    <input type="text" name="naslov" id="">
 </label>
 <br><br>

 <label for="">
    Godina:
    <input type="text" name="godina" id="">
 </label>
 <br><br>

<input type="submit" value="Dodaj novo">

</form>
    

</body>
</html>