<!DOCTYPE html>
<html lang="id">
<?php
include("../core/url.php");
include("../core/header.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekap Formulir</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0px;
        }

        h2 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
<?php navbar("rekap");?>
    <h2>Rekap Formulir</h2>
    <table>
        <thead>
            <tr>
                <th>Nama Lengkap</th>
                <th>Nomor Induk</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Kewarganegaraan</th>
                <th>Agama</th>
                <th>Email</th>
                <th>Nomor Telepon</th>
                <th>Jenis Kelamin</th>
                <th>Nama Orang Tua / Wali</th>
                <th>Alamat</th>
                <th>Pendidikan Terakhir</th>
                <th>Nama Sekolah</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data formulir dapat ditampilkan menggunakan loop PHP -->
            <?php
            // Ubah nama file jika perlu
            $namaFile = '../core/fungsi/rekap_formulir.txt';
            $dataRekap = file_get_contents($namaFile);
            $dataRows = explode("\n", $dataRekap);

            foreach ($dataRows as $row) {
                $data = explode("|", $row);
                echo "<tr>";
                foreach ($data as $field) {
                    echo "<td>$field</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
<?php
include('../core/footer.php');


?>
</html>
