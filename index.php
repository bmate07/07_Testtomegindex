<?php
$testtomeg = (int) $_GET["testtomeg"] ?? 80;
$magassag = (int) $_GET["magassag"] ?? 180;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testtömeg index</title>
</head>

<body>
    <h1>BMI</h1>

    <form action="" method="get">
        <label for="a">Testtömeg (KG): </label>
        <input type="number" id="testtomeg" name="testtomeg" value="<?php echo $testtomeg ?>">

        <label for="b">Magasság (CM): </label>
        <input type="number" id="magassag" name="magassag" value="<?php echo $magassag ?>">

        <button type="submit">Kiszámítás</button>
    </form>

    <p>
        <?php
        if ($testtomeg > 0 && $magassag > 0) {
            $magassag_m = $magassag / 100;
            $bmi = $testtomeg / ($magassag_m * $magassag_m);

            echo "Eredmény: " . round($bmi, 2);

            // Kategória meghatározása
            if ($bmi < 16.0) {
                $kategoria = "Súlyos soványság";
            } elseif ($bmi < 17.0) {
                $kategoria = "Mérsékelt soványság";
            } elseif ($bmi < 18.5) {
                $kategoria = "Enyhe soványság";
            } elseif ($bmi < 25.0) {
                $kategoria = "Normál testsúly";
            } elseif ($bmi < 30.0) {
                $kategoria = "Túlsúly";
            } elseif ($bmi < 35.0) {
                $kategoria = "I. fokú elhízás";
            } elseif ($bmi < 40.0) {
                $kategoria = "II. fokú elhízás";
            } else {
                $kategoria = "III. fokú elhízás (súlyos)";
            }
        }
        ?>
    </p>
</body>

</html>