<?php 
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        $getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM 
        tb_pendaftaran");
        $d = mysqli_fetch_object($getMaxId);
        $generateId = 'p'.date('Y').sprintf("%05s", $d->id + 1);

        // proses insert
        $insert = mysqli_query($conn, "INSERT INTO tb_pendaftaran VALUES (
                    '".$generateId."',
                    '".date('Y-m-d')."',
                    '".$_POST['th_ajaran']."',
                    '".$_POST['nm']."',
                    '".$_POST['tmp_lahir']."',
                    '".$_POST['tgl_lahir']."',
                    '".$_POST['jk']."',
                    '".$_POST['nm_bapak']."',
                    '".$_POST['alamat']."',
                    '".$_POST['knp_ingin']."'
            )");

                if($insert){
                    echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
                }else{
                    echo 'kurang beruntung'.mysqli_error($conn);
                }

    }
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendafatran mahasantri baru</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>

    <!-- bagian buat formulir -->
    <section class="box-formulir">
        <h2>formulir pendaftaran mahsantri baru</h2>

        <!-- bagian form -->
        <form action="" method="POST">

            <div class="box">
                <table border ="0" class="table-form">
                    <tr>
                        <td>Tahun Ajaran</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="th_ajaran" class="input-control" value="2023/2024" readonly>
                        </td>
                    </tr>
                </table>
            </div>
                
        <h3>Data calon calon Mahasantri</h3>
        <div class="box">
                <table border ="0" class="table-form">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nm" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>tempat lahir</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="tmp_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal lahir</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="tgl_lahir" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jk" class="input-control" value="Laki-laki"> Laki-laki
                            &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="jk" class="input-control" value="Perempuan"> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Nama bapak</td>
                        <td>:</td>
                        <td>
                            <textarea class="input-control" name="nm_bapak"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Lengkap</td>
                        <td>:</td>
                        <td>
                            <textarea class="input-control" name="alamat"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Kenapa Ingin Masuk Kesini?</td>
                        <td>:</td>
                        <td>
                            <textarea class="input-control" name="knp_ingin"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
                        </td>
                    </tr>
                </table>
            </div>
</form>
</body>

</html>