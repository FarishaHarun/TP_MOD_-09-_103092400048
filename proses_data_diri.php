<?php
$nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
$tgl_raw = isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : '';
$hobi = isset($_POST['hobi']) ? $_POST['hobi'] : [];

$bulan_indo = [
    1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
    5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
    9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
];

$tgl_hasil = '';
if ($tgl_raw !== '') {
    $bagian = explode('-', $tgl_raw);
    $tgl_hasil = (int)$bagian[2] . ' ' . $bulan_indo[(int)$bagian[1]] . ' ' . $bagian[0];
}

$hobi_hasil = !empty($hobi) ? htmlspecialchars(implode(', ', $hobi)) : 'Tidak ada hobi yang dipilih';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tampilan Data Anda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            box-sizing: border-box;
        }
        .card {
            background: #fff;
            width: 100%;
            max-width: 470px;
            padding: 28px 32px;
            border: 1px solid #ececec;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
            box-sizing: border-box;
        }
        h2 {
            margin: 0 0 22px 0;
            padding-bottom: 16px;
            border-bottom: 1px solid #eeeeee;
            font-size: 24px;
            color: #111;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 28px;
        }
        td {
            padding: 11px 0;
            vertical-align: middle;
            font-size: 16px;
            color: #222;
        }
        td.label {
            font-weight: bold;
            width: 115px;
            padding-right: 18px;
        }
        a {
            color: #1a73e8;
            text-decoration: none;
            font-size: 15px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Tampilan Data Anda</h2>
    <table>
        <tr>
            <td class="label">Nama Lengkap:</td>
            <td><?= $nama ?></td>
        </tr>
        <tr>
            <td class="label">Tanggal Lahir:</td>
            <td><?= $tgl_hasil ?></td>
        </tr>
        <tr>
            <td class="label">Hobi:</td>
            <td><?= $hobi_hasil ?></td>
        </tr>
    </table>
    <a href="form_data_diri.html">&laquo; Kembali ke Form</a>
</div>

</body>
</html>