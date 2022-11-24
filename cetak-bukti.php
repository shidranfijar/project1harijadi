<?php 
    include 'koneksi.php';

    $peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($peserta);
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendafatran mahasantri baru</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <script>
        window.print();
    </script>
</head>
<body>
    <h2>Bukti Pendaftaran</h2>
    <table class="table-data" border="0">
        <tr>
            <td>Kode pendaftaran</td>
            <td>:</td>
            <td><?php echo $p->id_pendaftaran ?></td>
        </tr>
        <tr>
            <td>Tanggal daftar</td>
            <td>:</td>
            <td><?php echo $p->tgl_daftar ?></td>
        </tr>
        <tr>
            <td>Tahun ajaran</td>
            <td>:</td>
            <td><?php echo $p->th_ajaran ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $p->nm_peserta ?></td>
        </tr>
        <tr>
            <td>Tempat lahir</td>
            <td>:</td>
            <td><?php echo $p->tmp_lahir.', '.$p->tgl_lahir ?></td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td>:</td>
            <td><?php echo $p->jk ?></td>
        </tr>
        <tr>
            <td>Nama bapak</td>
            <td>:</td>
            <td><?php echo $p->nm_bapak ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $p->alamat ?></td>
        </tr>
        <tr>
            <td>Kenapa ingin masuk kesini?</td>
            <td>:</td>
            <td><?php echo $p->knp_masuk ?></td>
        </tr>
    </table>
    
</body>
</html>