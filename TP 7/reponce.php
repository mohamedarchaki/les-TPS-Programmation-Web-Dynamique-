<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reponce</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="home">
        <div class="form">
        <p><?="Hello " . $_POST['Fname'] . " " . $_POST['Lname'] ?></p>
        <p><?="You were born on : " . $_POST['dns']?></p>
        <p><?=" Your gener is : " . $_POST['genre']?></p>
        <p><?=" Password is : " . $_POST['psw'] . ".";?></p>
        </div>
    </div>
</body>
</html>