<!DOCTYPE html>

    <?php
        include 'koneksi.php';

        $id_member = '';
        $namamember = '';
        $nomormember = '';
        $alamat = '';
        $daftar = '';
        $bayar = '';

        if(isset($_GET['ubah'])){
            $id_member = $_GET['ubah'];
            
            $query = "SELECT * FROM member WHERE id_member = '$id_member';";
            $sql =mysqli_query($conn, $query);

            $hasil = mysqli_fetch_assoc($sql);

            $namamember = $hasil['nama_member'];
            $nomormember = $hasil['nomor_member'];
            $alamat = $hasil['alamat'];
            $daftar = $hasil['tgl_mendaftar'];
            $bayar = $hasil['tgl_terakhir_bayar'];

            //var_dump($hasil);

            //die();
        } 
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-container {
            display: flex;
            justify-content: flex-start;
            gap: 1rem;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Halaman Member</h1>
        <form method="POST" action="model.php" >
            <input type="hidden" value="<?php echo $id_member; ?>" name="id_member">
            <div class="form-group row">
                <label for="nama_member" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_member" id="nama_member" value="<?php echo $namamember; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="nomor_member" class="col-sm-2 col-form-label">Nomor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomor_member" id="nomor_member" value="<?php echo $nomormember; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" ><?php echo $alamat; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="daftar" class="col-sm-2 col-form-label">Tanggal Mendaftar</label>
                <div class="col-sm-10">
                    <input type="datetime-local" class="form-control" name="daftar" id="daftar" value="<?php echo $daftar; ?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="bayar" class="col-sm-2 col-form-label">Tanggal Terakhir Bayar</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="bayar" id="bayar" value="<?php echo $bayar; ?>" >
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <?php
                        if(isset($_GET['ubah'])){
                    ?>
                            <button class="btn btn-primary"  type="submit" value="edit" name="aksi">Simpan Perubahan</button>
                    <?php
                        } else{
                    ?> 
                            <button class="btn btn-primary"  type="submit" value="add" name="aksi">Tambah Data</button>
                    <?php
                        }
                    ?>
                    <a class="btn btn-danger" href="member.php" type="button">Batal</a>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
