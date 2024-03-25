<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>

<body>
    <h3>Forum perhitungan gaji karyawan PT BLACKMAN</h3>
    <hr><br>
    <!-- Input data menggunakan POST -->
    <h3>FORM POST METHOD</h3>
    <form action="" method="POST">
        <p>Jumlah upah per jam : <input type="text" name="upah" value=""></p>
        <p>Jumlah jam kerja : <input type="text" name="jamkerja" value=""></p>
        <input type="submit" name="submit" value="Submit">
    </form>

    <h3>OUTPUT POST METHOD</h3>
    <?php
        if (isset( $_POST['submit'] )) {
            // Ambil data dari form
            echo "Jumlah upah per jam = Rp.", $_POST['upah'], '<br>';
            echo "Jumlah jam kerja = ", $_POST['jamkerja'], '<br>';
            
            // Proses perhitungan
            if ($_POST['jamkerja'] > 48){
                $upah = $_POST['upah'] * $_POST['jamkerja'];
                $waktu_lembur = $_POST['jamkerja'] - 48;
                $uang_lembur = $waktu_lembur * 0.15 * $_POST['upah'];
                $total_upah = $upah + $uang_lembur;
                echo "Jumlah upah total + bonus lembur =",  $total_upah, "<br>";
            } else {
                $gaji = $_POST['upah'] * $_POST['jamkerja'];
                echo "Jumlah upah total =", $gaji, "<br>";
            }
        }
    ?>
    <br><br>
    <hr>

    <!-- Input data menggunakan GET -->
    <h3>FORM GET METHOD</h3>
    <form action="" method="GET">
        <p>Jumlah upah per jam : <input type="text" name="upah" value=""></p>
        <p>Jumlah jam kerja : <input type="text" name="jamkerja" value=""></p>
        <input type="submit" name="submit" value="Submit">
    </form>

    <h3>OUTPUT GET METHOD</h3>
    <?php
        if (isset( $_GET['submit'] )) {
            // Ambil data dari form
            echo "Jumlah upah per jam = Rp.", $_GET['upah'], '<br>';
            echo "Jumlah jam kerja = ", $_GET['jamkerja'], '<br>';
            
            // Proses perhitungan
            if ($_GET['jamkerja'] > 48){
                $upah = $_GET['upah'] * $_GET['jamkerja'];
                $waktu_lembur = $_GET['jamkerja'] - 48;
                $uang_lembur = $waktu_lembur * 0.15 * $_GET['upah'];
                $total_upah = $upah + $uang_lembur;
                echo "Jumlah upah total + bonus lembur =",  $total_upah, "<br>";
            } else {
                $gaji = $_GET['upah'] * $_GET['jamkerja'];
                echo "Jumlah upah total =", $gaji, "<br>";
            }
        }
    ?>
    <br><br>
    <hr>
</body>

</html>