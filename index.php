<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<body>
    <h1>Bonjour le monde</h1>


    
    <?php
if (isset($_POST['number'])) {
    $N = intval($_POST['number']);
    $sum = 0;

    for ($i = 1; $i <= $N; $i++) {
        $sum += $i;
    }
} else {
    $N = '';
    $sum = '';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calcul de la somme des N premiers nombres entiers</title>
</head>
<body>
    <h1>Calcul de la somme des N premiers nombres entiers</h1>
    <form method="post" action="">
        <label for="number">N :</label>
        <input type="number" id="number" name="number" value="<?php echo $N; ?>" required>
        <button type="submit">Calculer</button>
    </form>

    <?php if (!empty($sum)) { ?>
        <p>La somme des <?php echo $N; ?> premiers nombres entiers est : <?php echo $sum; ?></p>
    <?php } ?>
</body>
</html>



<?php
if (isset($_POST['numbers'])) {
    $numbers = explode(',', $_POST['numbers']);
    $numbers = array_map('intval', $numbers);
    
    $min = min($numbers);
    $max = max($numbers);
} else {
    $numbers = '';
    $min = '';
    $max = '';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Recherche du minimum et du maximum</title>
</head>
<body>
    <h1>Recherche du minimum et du maximum</h1>
    <form method="post" action="">
        <label for="numbers">Nombres (séparés par des virgules) :</label>
        <input type="text" id="numbers" name="numbers" value="<?php echo $numbers; ?>" required>
        <button type="submit">Calculer</button>
    </form>

    <?php if (!empty($min) && !empty($max)) { ?>
        <p>Le minimum est : <?php echo $min; ?></p>
        <p>Le maximum est : <?php echo $max; ?></p>
    <?php } ?>
</body>
</html>


<?php
if (isset($_POST['dividend']) && isset($_POST['divisor'])) {
    $dividend = intval($_POST['dividend']);
    $divisor = intval($_POST['divisor']);
    
    $quotient = 0;
    while ($dividend >= $divisor) {
        $dividend -= $divisor;
        $quotient++;
    }
    
    $remainder = $dividend;
} else {
    $dividend = '';
    $divisor = '';
    $quotient = '';
    $remainder = '';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calcul du quotient et du reste</title>
</head>
<body>
    <h1>Calcul du quotient et du reste</h1>
    <form method="post" action="">
        <label for="dividend">Dividende :</label>
        <input type="number" id="dividend" name="dividend" value="<?php echo $dividend; ?>" required>
        <br>
        <label for="divisor">Diviseur :</label>
        <input type="number" id="divisor" name="divisor" value="<?php echo $divisor; ?>" required>
        <br>
        <button type="submit">Calculer</button>
    </form>

    <?php if (!empty($quotient) && !empty($remainder)) { ?>
        <p>Quotient : <?php echo $quotient; ?></p>
        <p>Reste : <?php echo $remainder; ?></p>
    <?php } ?>
</body>
</html>


<?php
if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = intval($_POST['num1']);
    $num2 = intval($_POST['num2']);
    
    $product = 0;
    for ($i = 0; $i < $num2; $i++) {
        $product += $num1;
    }
} else {
    $num1 = '';
    $num2 = '';
    $product = '';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calcul du produit</title>
</head>
<body>
    <h1>Calcul du produit</h1>
    <form method="post" action="">
        <label for="num1">Premier entier :</label>
        <input type="number" id="num1" name="num1" value="<?php echo $num1; ?>" required>
        <br>
        <label for="num2">Deuxième entier :</label>
        <input type="number" id="num2" name="num2" value="<?php echo $num2; ?>" required>
        <br>
        <button type="submit">Calculer</button>
    </form>

    <?php if (!empty($product)) { ?>
        <p>Produit : <?php echo $product; ?></p>
    <?php } ?>
</body>
</html>


<?php
if (isset($_POST['number'])) {
    $number = intval($_POST['number']);
    $binary = decbin($number);
} else {
    $number = '';
    $binary = '';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calcul du binaire d'un entier</title>
</head>
<body>
    <h1>Calcul du binaire d'un entier</h1>
    <form method="post" action="">
        <label for="number">Entier :</label>
        <input type="number" id="number" name="number" value="<?php echo $number; ?>" required>
        <button type="submit">Calculer</button>
    </form>

    <?php if (!empty($binary)) { ?>
        <p>La représentation binaire de <?php echo $number; ?> est : <?php echo $binary; ?></p>
    <?php } ?>
</body>
</html>


<?php
if (isset($_POST['numA']) && isset($_POST['numB'])) {
    $numA = intval($_POST['numA']);
    $numB = intval($_POST['numB']);
    
    $isDivisible = ($numA % $numB) === 0;
} else {
    $numA = '';
    $numB = '';
    $isDivisible = null;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Détermination de la divisibilité</title>
</head>
<body>
    <h1>Détermination de la divisibilité</h1>
    <form method="post" action="">
        <label for="numA">Nombre A :</label>
        <input type="number" id="numA" name="numA" value="<?php echo $numA; ?>" required>
        <br>
        <label for="numB">Nombre B :</label>
        <input type="number" id="numB" name="numB" value="<?php echo $numB; ?>" required>
        <br>
        <button type="submit">Vérifier</button>
    </form>

    <?php if ($isDivisible !== null) { ?>
        <?php if ($isDivisible) { ?>
            <p><?php echo $numA; ?> est divisible par <?php echo $numB; ?></p>
        <?php } else { ?>
            <p><?php echo $numA; ?> n'est pas divisible par <?php echo $numB; ?></p>
        <?php } ?>
    <?php } ?>
</body>
</html>



<?php
if (isset($_POST['number'])) {
    $number = intval($_POST['number']);
    $divisors = array();
    
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i === 0) {
            $divisors[] = $i;
        }
    }
} else {
    $number = '';
    $divisors = array();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Détermination des diviseurs</title>
</head>
<body>
    <h1>Détermination des diviseurs</h1>
    <form method="post" action="">
        <label for="number">Nombre :</label>
        <input type="number" id="number" name="number" value="<?php echo $number; ?>" required>
        <button type="submit">Calculer</button>
    </form>

    <?php if (!empty($divisors)) { ?>
        <p>Les diviseurs de <?php echo $number; ?> sont :</p>
        <ul>
            <?php foreach ($divisors as $divisor) { ?>
                <li><?php echo $divisor; ?></li>
            <?php } ?>
        </ul>
    <?php } ?>
</body>
</html>



<?php
if (isset($_POST['number'])) {
    $number = intval($_POST['number']);
    $isPrime = isPrimeNumber($number);
} else {
    $number = '';
    $isPrime = null;
}

function isPrimeNumber($num)
{
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Détermination de nombre premier</title>
</head>
<body>
    <h1>Détermination de nombre premier</h1>
    <form method="post" action="">
        <label for="number">Nombre :</label>
        <input type="number" id="number" name="number" value="<?php echo $number; ?>" required>
        <button type="submit">Vérifier</button>
    </form>

    <?php if ($isPrime !== null) { ?>
        <?php if ($isPrime) { ?>
            <p><?php echo $number; ?> est un nombre premier.</p>
        <?php } else { ?>
            <p><?php echo $number; ?> n'est pas un nombre premier.</p>
        <?php } ?>
    <?php } ?>
</body>
</html>



<?php
if (isset($_POST['number'])) {
    $number = intval($_POST['number']);
    $sum = calculateDigitSum($number);
} else {
    $number = '';
    $sum = null;
}

function calculateDigitSum($num)
{
    $sum = 0;
    while ($num > 0) {
        $digit = $num % 10;
        $sum += $digit;
        $num = intval($num / 10);
    }
    return $sum;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calcul de la somme des chiffres</title>
</head>
<body>
    <h1>Calcul de la somme des chiffres</h1>
    <form method="post" action="">
        <label for="number">Nombre :</label>
        <input type="number" id="number" name="number" value="<?php echo $number; ?>" required>
        <button type="submit">Calculer</button>
    </form>

    <?php if ($sum !== null) { ?>
        <p>La somme des chiffres de <?php echo $number; ?> est : <?php echo $sum; ?></p>
    <?php } ?>
</body>
</html>
</body>

</body>
</html>