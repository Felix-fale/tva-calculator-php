<?php

        if(isset($_POST["submit"]))
        {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST['operation'];
            $resultat = $_POST["resultat"];
            switch($operation)
            {
                case "Non":
                    echo "Il faut selectionner un operateur";
                break;

                case "calculTva":
                  $resultat = $num1*$num2;
                  $resultat = $resultat/100;
                  break;
            }
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule</title>
</head>
<body>
    <div class="calcule">
        <form action="" method="POST">
            <label for="">Montant HT</label>
            <input type="text" name="num1">
            <br> <br>

            <label for="">Operateur</label>
            <select name="operation" id="">
                <option value="Non">Non</option>
                <option value="Addition">Addition</option>
                <option value="Multiplication">Multiplication</option>
                <option value="Soustration">Soustration</option>
                <option value="calculTva">calculTva</option>
            </select>
            <br> <br>

            <label for="">Tva</label>
            <input type="text" name="num2">
            <br> <br>

            <input type="submit" value="Calculer" name="submit">
            
            <input type="text" name="resultat" id="" value="<?php echo $resultat; ?>">

        </form>
    </div>

</body>
</html>