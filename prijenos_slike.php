<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijenos slike</title>
</head>
<body>
    <h1>
        Prijenos slike
    </h1>
    <hr>

    <form action="upload_handler.php" method="post" enctype="multipart/form-data">
        <label> Prijenos slike
            <input type="file" name="slika" >
        </label>
        <label>
            <input type="submit" value="Pošalji">
        </label>
    </form>
    
</body>
</html>