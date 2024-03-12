<?php

require_once 'nilai_akademik.php';

if (!isset($_POST["submit"])) {
    header("Location: index.php");
    exit;
}

$proses = $_POST["submit"];
$nama_mahasiswa = $_POST["identitas"];
$pelajaran = $_POST["mata_kuliah"];
$hasil_uts = $_POST["hasiluts"];
$hasil_uas = $_POST["hasiluas"];
$hasil_tugas = $_POST["hasiltugas"];
$nilai_akhir = ($hasil_uts + $hasil_uas + $hasil_tugas) / 3;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Mahasiswa</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-size: 18px;
        }

        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px;
            font-size: 1.2em;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 12px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <th>Data</th>
            <th>Nilai</th>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td><?php echo $nama_mahasiswa; ?></td>
        </tr>
        <tr>
            <td>Mata Kuliah</td>
            <td><?php echo $pelajaran; ?></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td><?php echo $hasil_uts; ?></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td><?php echo $hasil_uas; ?></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td><?php echo $hasil_tugas; ?></td>
        </tr>
        <tr>
            <td>Hasil Akhir</td>
            <td><?php echo $nilai_akhir; ?></td>
        </tr>
        <tr>
            <td>Nilai Akademik</td>
            <td><?php echo grade($nilai_akhir); ?></td>
        </tr>
        <tr>
            <td>DINYATAKAN</td>
            <td><?php echo kelulusan($nilai_akhir); ?></td>
        </tr>
    </table>

</body>

</html>
