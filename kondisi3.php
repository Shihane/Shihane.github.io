<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>k3</title>
</head>
<body>
<?php
$nilai = 60;
if($nilai >= 90){
 echo "Nilai Memuaskan";
}elseif ($nilai >= 80){
 echo "Nilai Bagus";
}elseif($nilai >=50){
 echo "Nilai Kurang";
}else{
 echo "Nilai Sangat Kurang";
}

$bln = date("M");
switch($bln)
{
case "Jan" : $namaBln = "Januari";
break;
case "Feb" : $namaBln = "Februari";
break;
case "Mar" : $namaBln = "Maret";
break;
case "Apr" : $namaBln = "April";
break;
case "May" : $namaBln = "Mei";
break;
case "Jun" : $namaBln = "Juni";
break;
case "Jul" : $namaBln = "Juli";
break;
case "Aug" : $namaBln = "Agustus";
break;
case "Sep" : $namaBln = "September";
break;
case "Oct" : $namaBln = "Oktober";
break;
case "Nov" : $namaBln = "November";
break;
case "Dec" : $namaBln = "Desember";
break;
}

echo "Nama bulan sekarang adalah : ".$namaBln;


?>
</body>
</html>