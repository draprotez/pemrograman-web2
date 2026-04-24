<html>
<head>
    <title>Contoh Penggunaan UDF</title>
</head>
<body>
    <form method="post">
        Masukkan Bilangan Pertama : <br>
        <input type="text" name="A" size="10"><br>
        Masukkan Bilangan Kedua : <br>
        <input type="text" name="B" size="10"><br>
        <input type="submit" value="hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $A = $_POST["A"];
        $B = $_POST["B"];

       
        function jumlah($A, $B) {
            $jumlahbil = $A + $B;
            return $jumlahbil;
        }

        function kurang($A, $B) {
            $kurangbil = $A - $B;
            return $kurangbil;
        }

        function kali($A, $B) {
            $kalibil = $A * $B;
            return $kalibil;
        }

        function bagi($A, $B) {
            if ($B != 0) {
                $bagibil = $A / $B;
            } else {
                $bagibil = "Tidak terhingga (pembagi nol)";
            }
            return $bagibil;
        }

        echo "Bilangan Pertama : " . $A . "<br>";
        echo "Bilangan Kedua : " . $B . "<br><br>";

        echo "Hasil Penjumlahan 2 buah bilangan : <br>";
        $jumlahbil = jumlah($A, $B);
        printf("Penjumlahan antara : %d + %d = %d", $A, $B, $jumlahbil);
        echo "<br><br>";

        echo "Hasil Pengurangan 2 buah bilangan : <br>";
        $kurangbil = kurang($A, $B);
        printf("Pengurangan antara : %d - %d = %d", $A, $B, $kurangbil);
        echo "<br><br>";

        echo "Hasil Perkalian 2 buah bilangan : <br>";
        $kalibil = kali($A, $B);
        printf("Perkalian antara : %d * %d = %d", $A, $B, $kalibil);
        echo "<br><br>";

        echo "Hasil Pembagian 2 buah bilangan : <br>";
        $bagibil = bagi($A, $B);
        printf("Pembagian antara : %d / %d = %s", $A, $B, $bagibil);
        echo "<br><br>";
    }
    ?>
</body>
</html>