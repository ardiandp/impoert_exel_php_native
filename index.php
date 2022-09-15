<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Import Data Excel dengan PhpSpreadsheet</title>

</head>

<body>
    <h3>Data Siswa Hasil Import</h3>

    <a href="form.php">Import Data</a><br><br>

    <table border="1" cellpadding="5">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
            <th>Alamat</th>
        </tr>
        <?php
        // Load file koneksi.php
        include "koneksi.php";

        // Buat query untuk menampilkan semua data siswa
        $sql = mysqli_query($connect, "SELECT * FROM siswa");

        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        while ($data = mysqli_fetch_array($sql)) { // Ambil semua data dari hasil eksekusi $sql
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $data['nis'] . "</td>";
            echo "<td>" . $data['nama'] . "</td>";
            echo "<td>" . $data['jenis_kelamin'] . "</td>";
            echo "<td>" . $data['telp'] . "</td>";
            echo "<td>" . $data['alamat'] . "</td>";
            echo "</tr>";

            $no++; // Tambah 1 setiap kali looping
        }
        ?>
    </table>
</body>

</html>