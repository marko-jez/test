<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrada</title>
</head>
<body>
    <h1>Obrada</h1>
    <hr>

    <?php
    var_dump($_FILES);

    $uploads = __DIR__ . '/dokumentacija/';

    if(isset($_FILES['dokument'])) {
        $uploadedFile = $_FILES['dokument'];
        if(str_contains($uploadedFile['type'], 'pdf')) {
            move_uploaded_file($uploadedFile['tmp_name'], $uploads . $uploadedFile['name']);
            echo "Dokument uspješno spremljen!";
        } else {
            echo "Samo pdf dokumenti su dozvoljeni";
        }
    }
    ?>
</body>
</html>