<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function luas_persegi($setengah,$alas, $tinggi){
        $luas = $setengah * $alas * $tinggi;
        echo "luasnya adalah : $luas cm <br/>";
    }
    $setengah = 1/2;
    $alas = 6;
    $tinggi = 8;
    
    echo "setengah : $setengah <br/>";
    echo "alas : $alas <br/>";
    echo "tinggi : $tinggi <br/>";
    luas_persegi($setengah, $alas, $tinggi)
    ?>
    
</body>
</html>