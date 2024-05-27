<?php
    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){
            
            $namamember = $_POST['nama_member'];
            $nomormember =$_POST['nomor_member'];
            $alamat = $_POST['alamat'];
            $daftar =$_POST['daftar'];
            $bayar = $_POST['bayar'];

            $query = "INSERT INTO member VALUES(null, '$namamember', '$nomormember', '$alamat', '$daftar','$bayar')";
            $sql = mysqli_query($conn, $query);
            if($sql){
                header("location: member.php ");
                //echo "data berhasil di tambahkan <a href='member.php'> home </a>";
            }else{
                echo $query;
            }
            echo $namamember ."|".$nomormember."|".$alamat. "|". $daftar ."|". $bayar;

            echo "tambah data <a href='member.php'> home </a>" ;
        } elseif($_POST['aksi'] == "edit"){
            $id_member = $_POST["id_member"];
            $namamember = $_POST['nama_member'];
            $nomormember =$_POST['nomor_member'];
            $alamat = $_POST['alamat'];
            $daftar =$_POST['daftar'];
            $bayar = $_POST['bayar'];

            $query = "UPDATE member SET nama_member='$namamember', nomor_member='$nomormember', alamat ='$alamat', tgl_mendaftar='$daftar', tgl_terakhir_bayar ='$bayar' WHERE id_member='$id_member';";
            $sql = mysqli_query($conn, $query);
            header("location: member.php ");
        }
    }

    if(isset($_GET['hapus'])){
        $id_member = $_GET['hapus'];
        $query = "DELETE FROM member WHERE id_member = '$id_member'; ";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: member.php ");
            //echo "data berhasil di tambahkan <a href='member.php'> home </a>";
        }else{
            echo $query;
        }
        //echo "hapus data <a href='member.php'> home </a>";
    }
?>