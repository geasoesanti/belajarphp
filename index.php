<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nama = "Budi";
    $umur = 30;
    $sudahmenikah = false;

    echo "Nama saya $nama, umur saya $umur tahun";

    if ($sudahmenikah == true) {
        echo "Sudah menikah";
    } else {
        echo "Belum menikah";
    }

    for ($i=1; $i < 10; $i+=2) {
        echo "<br>";
        echo $i;
    }

    $harga = 112000;
    if ($harga > 100000) {
        $disk = $harga * 0.10;
        $total = $harga - $disk;
        echo "Total belanja Anda adalah $total";
    } else {
        echo "Total belanja Anda adalah $harga";
    }

    $mhs = ['Deni', 'Sindi', 'Deka'];
    //$datamhs = [$nama = "Merry", $umur = 20, $kelas = "A", $prodi = "BD"];
    //echo "Nama saya $datamhs["nama"], umur saya $datamhs["umur"], saya dari kelas $datamhs["kelas"] prodi $datamhs["prodi"]";

    function perkalian($angka1, $angka2) {
        return $angka1 * $angka2;
    }

    $hasil = perkalian(20,10);
    echo $hasil;
    ?>
</body>
</html>