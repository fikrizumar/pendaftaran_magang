<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <!-- Link ke bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">


    <link rel="icon" href="mitratek.png">
    <title>Pendaftaran Magang | Mitratek</title>

</head>
<!-- Awal CSS -->
<style>
    /*body{
        background-color: #e2edff;
    }*/
    /*.navbar{
        background-color: mediumspringgreen;
    }*/
    h4{
        padding-top: 6rem;
    }
    /*(ALASAN) untuk mengatur spasi bagian atas di colom 2*/
    .alasan{
        padding-top: 6rem;
    }
    select{
        width: 20%;
        border: 0;
        padding: 5px 2px;
        border-color: blue;
        border-radius: 5px;
        background-color: white;
    }
    
</style>
<!-- Akhir CSS -->
<body>
<nav class="navbar navbar-light bg-info  fixed-top fw-bold" id="navbar">
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


    <div class="container ">
        <div class="row text-left mb-3">
            <div class="col-6">
            <h4 class="mb-3">Isilah formulir dibawah ini!!</h4>
            
                <form action="" method="POST">
                        <div class="mb-3 ">
                            <label for="name" class="form-label">Nama Lengkap: </label>
                            <input type="text" name="nama" required autofocus placeholder="Masukkan Nama" class="form-control" aria-describedby="nama">
                        </div>

                        <div class="mb-3 ">
                            <label for="alamat" class="form-label">Alamat:</label>
                            <input type="text" name="alamat" required autofocus placeholder="Masukkan Alamat" class="form-control"  aria-describedby="alamat">
                        </div>
                        
                        <div class="mb-3 ">
                            <label for="asal_sekolah" class="form-label">Asal Sekolah:</label>
                            <input type="text" name="asal_sekolah" required autofocus placeholder="Asal Sekolah" class="form-control"  aria-describedby="asal_sekolah">
                        </div>

                        <div class="mb-3">
                            <div class="mb-3">
                            <label for="Kelas">Kelas: </label><br>
                            </div>
                        <select name="kelas" id="kelas" class="form-select" aria-label="Default select example">
                            <option selected>Pilih kelas</option>
                            <option value="kelasXI">Kelas XI</option>
                            <option value="kelasXII">Kelas XII</option>
                         
                        </select>
                        </div>
            </div>

            <div class="col-6">
                    <div class="mb-3 mt-5">
                        <label class="alasan mb-2" for="Alasan">Alasan </label>
                        <input type="text" name="alasan" placeholder="Alasan ingin magang di MITRATEK" class="form-control" aria-describedby="alasan">
                    </div>
                    <div class="mb-3">
                        <label class="mb-2" for="nomor">No. HP</label>
                        <input type="text" name="nomor" class="form-control" aria-describedby="nomor" placeholder="Masukkan Nomor HP">
                    </div>
                    <button type="submit" class="btn btn-primary" title="Confirm Data" name="submit"><i class="bi bi-send-fill"></i> Kirim</button>
                        <button type="reset" class="btn btn-danger" title="Hapus Data" name="hapus" onclick="return confirm('Apakah anda yakin MENGHAPUS data ini?');"><i class="bi bi-trash-fill"></i> Hapus</button>
                
            </div>
            </form>

            <?php 
            
            // proses mengirim hasil inputan ke databse
            include "koneksi.php";

            if (isset($_POST["submit"]) ) {

            $nama = $_POST["nama"];
            $alamat = $_POST["alamat"];
            $asal_sekolah = $_POST["asal_sekolah"];
            $kelas = $_POST["kelas"];
            $alasan = $_POST["alasan"];
            $nomor = $_POST["nomor"];
            
            // Memasukkan data ke databse (INPUT)
            $query = "INSERT INTO respon_daftar VALUES
                        ('', '$nama', '$alamat','$asal_sekolah','$kelas',''$alasan','$nomor')";
            mysqli_query($koneksi, $query);


            }
            ?>

            
           
        </div>
    </div>
        
    <footer class="text-center" id="footer">
        <p>Created by <a target="_blank" href="https://mitratek.com">CV. Mitra Teknologi Sejati</a> </p>
    </footer>
            
            
            
    


    <!-- Link ke JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>