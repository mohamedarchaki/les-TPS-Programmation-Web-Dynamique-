<?php
session_start();

if (isset($_POST['btn'])) {
    $valid_user = $_POST['login'];
    $valid_pass = $_POST['psw'];

    if (!empty($valid_pass) && !empty($valid_user)) {
        $user = ['login' => $valid_user, 'password' => $valid_pass];
        $_SESSION['user'] = $user;
        header("Location: welcome.php");
    } else {
        echo "Identifiants invalides.";
    }
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
    <form action="login.php" method="post">
       <label for=""> Identifiant : </label>
            <input type="text" name="login">
        <label for="">Mot de passe : </label> 
            <input type="password" name="psw"><br>
        <button type="submit" name="btn">Connexion</button>
    </form>
</body>

</html>