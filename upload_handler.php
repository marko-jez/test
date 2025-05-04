<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrada slike</title>
</head>
<body>
    <h1>Obrada</h1>
    <hr>

<?php

$odrediste = __DIR__ . '/slike_korisnika/'; 

if(isset($_FILES['slika']) && $_FILES['slika']['error'] == 0) {
    echo "Slika postoji";
    $uploadaniFile = $_FILES['slika'];
    $putanja = $odrediste . $uploadaniFile['name'];
    if(str_contains($uploadaniFile['type'], 'image/png')) {
        move_uploaded_file($uploadaniFile['tmp_name'], $putanja);
    } else {
        echo "Slika ne postoji";
    }
    echo "Slika je poslana";
} else {
    echo  "Slika nije poslana";
}

?>

</body>
</html>