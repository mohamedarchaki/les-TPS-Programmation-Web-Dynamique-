<?php
if(isset($_POST['btn'])){


$nom = $_POST['nom'];
$message = $_POST['message'];
$date = date("Y-m-d H:i:s");

file_put_contents("livre_or.txt", "$date - $nom : $message\n", FILE_APPEND);

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <form method="post">
        Nom : <input type="text" name="nom" required><br> Message : <textarea name="message" required></textarea><br>
        <button type="submit" name="btn">Laisser un message</button>
    </form>
    <form action="" >
        <?php echo "<h2>Messages :</h2>";
echo nl2br(file_get_contents("livre_or.txt")); ?>
    </form>
</body>

</html>