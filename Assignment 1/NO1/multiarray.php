<?php	
// Deklarasi multidimentional array
$dataNilai = array(
			"Wayan" => array(	"Tugas" => 90,
								"UTS" => 60,
								"UAS" => 100),
			"Made" => array(	"Tugas" => 70,
								"UTS" => 50,
								"UAS" => 50),
			"Nyoman" => array(	"Tugas" => 60,
								"UTS" => 80,
								"UAS" => 70)
					);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Nilai</title>
    <style>
    /* CSS untuk membuat table border */
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>
</head>

<body>
    <h1>DATA NILAI MAHASISWA</h1>
    <hr><br>

    <!-- Tabel Nilai -->
    <table>
        <tr>
            <th>Nama Siswa</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
        </tr>
        <!-- Pengulangan untuk mengisi table data secara auto -->
        <?php foreach ($dataNilai as $nama => $nilai) : ?>
        <tr>
            <td><?php echo $nama ?></td>
            <td><?php echo $nilai["Tugas"] ?></td>
            <td><?php echo $nilai["UTS"] ?></td>
            <td><?php echo $nilai["UAS"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>