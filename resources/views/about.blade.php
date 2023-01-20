<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $judul ?></h1>
    <a href="/">Kembali</a>
    <table border="1">
        <tr>
            <td>Nama lengkap</td><td><?= $namalengkap ?></td>
        </tr>
        <tr>
            <td>tempat tanggal lahir <td><?= $ttl ?></td></td>
        </tr>
        <tr>
            <td>Nomor whtasapp <td><?= $wa ?></td></td>
        </tr>
        <tr>
            <td>hobi <td><?= $hobi ?></td></td>
        </tr>
        <tr>
            <td>jargon <td><?= $jargon ?></td></td>
        </tr>
        <tr>
            <td>foto </td><td><img src="<?= $foto ?>" alt=""></td>
        </tr>
    </table>
</body>
</html>