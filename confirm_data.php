<?php 
// error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Link ke bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel="icon" href="mitratek.png">
    <title>Konfirmasi Data</title>
</head>
<style>
	.navbar{
		background-color: mediumspringgreen;
	}
    h3{
        padding-top: 6rem;
    }
</style>
<body>
    <nav class="navbar navbar-light  fixed-top fw-bold" id="navbar">
  <div class="container-fluid ms-5">
    <a class="navbar-brand" target="_blank" href="https://mitratek.com">
        <img src="mitratek.png " alt="" width="50"  height="50" class="d-inline-block me-2 shadow-sm">
        CV. MITRA TEKNOLOGI SEJATI
    </a>
    <a class="navbar-brand me-5">
        PENDAFTARAN MAGANG
    </a>
  </div>
</nav>
    <h3 class="text-center mb-3">Konfirmasi Data Pendaftaran Magang</h3>
    <div class="row justify-content-center">
        <div class="col-md-11">
            <?php 
            include 'koneksi.php';
            $data = mysqli_query($koneksi, "SELECT * FROM respon_daftar ");
             ?>
            <table class="table table-striped table table table-bordered ">
                <tr>
                    <td>&nbsp;Nama Lengkap</td>
                    <td class="text-center">:</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;Alamat</td>
                    <td class="text-center">:</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;Asal Sekolah</td>
                    <td class="text-center">:</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;Kelas</td>
                    <td class="text-center">:</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;Nomor HP</td>
                    <td class="text-center">:</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;Alasan</td>
                    <td class="text-center">:</td>
                    <td>&nbsp; </td>
                </tr>
            </table>
            <a class="btn btn-primary" href="edit.php"><i class="bi bi-pencil-square"></i> Edit Data</a>
            <a class="btn btn-warning" href="cetak.php"><i class="bi bi-printer"></i> Cetak Data</a>
        </div>
    </div>
</body>
</html>