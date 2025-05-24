<?php
if(isset($_POST['env'])){
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mdp = $_POST['mdp'];
$email = $_POST['email'];
$message = $_POST['message'];


$host = 'localhost';
$dbname = 'tp_9';
$user = 'root';
$pass = ''; 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
 $sql = $pdo->prepare("INSERT INTO utilisateurs (nom,prenom,mdp,email,message) values(?,?,?,?,?)");
 $sql->execute([$nom,$prenom,$mdp,$email,$message]);

}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <h1>Contactez-nous</h1>
        <label>Nom: </label>
            <input type="text" name="nom" required>
        <label>Prénom: </label>
            <input type="text" name="prenom" required>
        <label>Mot de passe: </label>
            <input type="password" name="mdp" required>
        <label>Email: </label>
            <input type="email" name="email" required>
        <label>Message: </label>
            <textarea name="message" required></textarea>
        <button type="submit" name="env">Envoyer</button>
    </form>
</body>
</html>
