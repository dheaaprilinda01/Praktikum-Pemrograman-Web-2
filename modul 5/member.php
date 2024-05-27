<?php
    include 'koneksi.php';

    $query = "SELECT * FROM member;";
    $sql = mysqli_query($conn,$query);

    $no = 0;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Halaman Member</h1>
        <div class=" container mb-3">
            <a class="btn btn-primary" href="formmember.php" role="button">Tambah Data</a>
        </div>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">nomor</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal pendaftaran</th>
            <th scope="col">Tanggal Terakhir Bayar</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($hasil = mysqli_fetch_assoc($sql)) {
            ?>
            <tr>
            <th scope="row"><?php echo ++$no ;?></th>
            <td><?php echo $hasil['nama_member'];?></td>
            <td><?php echo $hasil['nomor_member'];?></td>
            <td><?php echo $hasil['alamat'];?></td>
            <td><?php echo $hasil['tgl_mendaftar'];?></td>
            <td><?php echo $hasil['tgl_terakhir_bayar'];?></td>
            <td>
                <a class="btn btn-success" href="formmember.php?ubah=<?php echo $hasil['id_member'];?>" type="button">Tambah</a>
                <a class="btn btn-danger" onclick="return confirm('apakah anda yakin menghapus data ini?')" href="model.php?hapus=<?php echo $hasil['id_member'];?>" type="button">Hapus</a>
            </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        </table>
        <a href="index.php" class="btn btn-primary">Kembali ke Index</a>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
