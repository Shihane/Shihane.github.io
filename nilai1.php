<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nilai = 50;

    while ($nilai <= 100)
{
    if($nilai <= 50)
    {
        echo "nilai sangat kurang", $nilai, "<br/>";
    }else if($nilai >= 51 && $nilai <65){
        echo "nilai kurang", $nilai, "<br/>";
    }else if ($nilai >= 65 && $nilai < 80){
        echo "nilai bagus ", $nilai, "<br/>";
    }else{
        echo "nilai sangat bagus",$nilai, "<br/>";
    }

    $nilai++;
}
?>
</body>
</html>