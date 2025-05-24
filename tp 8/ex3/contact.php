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
    if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['message'])) {
    echo "<h1>Message reçu</h1>";
    echo "Nom : " . htmlspecialchars($_POST['nom']) . "<br>";
    echo "Email : " . htmlspecialchars($_POST['email']) . "<br>";
    echo "Message : " . nl2br(htmlspecialchars($_POST['message']));
} else {
    echo "Veuillez remplir tous les champs.";
}
?>
    </form>
</body>
</html>

<?php
