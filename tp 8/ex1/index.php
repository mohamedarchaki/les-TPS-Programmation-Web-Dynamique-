<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <form method="post" action="">
        <input type="number" name="number1" required>
        <select name="oprateur">
            <option value="+">Addition</option>
            <option value="-">Soustraction</option>
            <option value="*">Multiplication</option>
            <option value="/">Division</option>
        </select>
        <input type="number" name="number2" required>
        <button type="submit" name="calculer">Calculer</button>

        <?php
        $result=0;
        if (isset($_POST['calculer'])) {
            $nbr1 = $_POST['number1'];
            $nbr2 = $_POST['number2'];
            $operateur = $_POST['oprateur'];
            $result = "";

            if ($operateur == "/" && $nbr2 == 0) {
                $result = "Erreur : Division par zéro.";
            } else {
                switch ($operateur) {
                    case "+": $result = $nbr1 + $nbr2; break;
                    case "-": $result = $nbr1 - $nbr2; break;
                    case "*": $result = $nbr1 * $nbr2; break;
                    case "/": $result = $nbr1 / $nbr2; break;
                    default : $result = "Opération impossible.";
                }
            }
}
        ?>
          <span>Résultat : <?= $result ?></span>
        
    </form>
</body>

</html>
