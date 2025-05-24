
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <form action="">
        <?php
session_start();
if (isset($_SESSION['user'])) {

?>
    <h1>Bienvenue, <?= $_SESSION['user']['login'] ?> </h1>
    <a href='logout.php'>Deconnexion</a>
<?php } else {
    echo "Acces refuse.";
}
?>
    </form>
</body>
</html>