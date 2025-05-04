<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodavanje knjige</title>
</head>
<body>
    <h1>Dodavanje knjige</h1>
    <hr>

    <?php
    $osobeContent = file_get_contents('osobe.json');
    
    $osobe = json_decode($osobeContent, true);

    $dodanaKnjiga = [
        'autor' => $_POST['autor'],
        'naslov' => $_POST['naslov'],
        'godina' => $_POST['godina'],
    ];

    $osobe[] = $dodanaKnjiga;

   $osobeJson = json_encode($osobe,JSON_UNESCAPED_UNICODE);

   file_put_contents(__DIR__ . '/osobe.json', $osobeJson);


    ?>
</body>
</html>