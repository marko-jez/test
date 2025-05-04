<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrazac</title>
</head>
<body>
    <h1>Obrazac</h1>
    <hr>
    
    <form action="obrada.php" method="post" enctype="multipart/form-data"> 
        <label>
            Slika:
            <input type="file" name="dokument">
        </label>
        <input type="submit" value="Upload">
    </form>
    
</body>
</html>