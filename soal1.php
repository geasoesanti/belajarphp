<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
     $hargabarang = 100000;
     $kodepromo = "PROMO30";
     $kodepromo = str_replace("PROMO", "", "PROMO30");
     echo "Angka $kodepromo";

     $angka = $kodepromo / 100;

     $potongan = $hargabarang * $angka;
     echo $potongan;
    ?>
</body>
</html>