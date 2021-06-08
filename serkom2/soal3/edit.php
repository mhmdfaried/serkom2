<!DOCTYPE html>
<html>

<head>
    <title>EDIT BARANG</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
    <div class="container col-md-6 mt-4">
        <h1>Edit Barang</h1>
        <div class="card">
            <div class="card-header bg-dark text-white ">

            </div>
            <div class="card-body">
                <?php
                include('koneksi.php');

                $id = $_GET['id'];


                $data = mysqli_query($koneksi, "SELECT * FROM tbl_barang where id = '$id'");
                $row = mysqli_fetch_assoc($data);

                ?>
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label>Kode Barang : </label>
                        <input type="text" name="kode_barang" placeholder="Kode Barang" required="" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Nama Barang : </label>
                        <input type="text" name="nama_barang" placeholder="Nama Barang" required="" class=" form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Jenis : </label>
                        <select name="jenis_barang">
                            <option>Elektronik</option>
                            <option>Makanan</option>
                            <option>Minuman</option>
                            <option>Sembako</option>
                            required="" class="form-control">
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Satuan : </label>
                        <select name="satuan">
                            <option>Kg</option>
                            <option>Unit</option>
                            <option>Dus</option>
                            <option>Liter</option>
                            required="" class="form-control">
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Harga : </label>
                        <input type="text" name="harga" placeholder="Harga" required="" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Stok : </label>
                        <input type="text" name="stok" placeholder="Stok" required="" class="form-control">
                    </div>
                    <br>
                    <a href="index.php" class="btn btn-primary">Batalkan</a>

                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Update Data</button>
                </form>

                <?php

                if (isset($_POST['submit'])) {

                    $kode_barang = $_POST['kode_barang'];
                    $nama_barang = $_POST['nama_barang'];
                    $jenis_barang = $_POST['jenis_barang'];
                    $satuan = $_POST['satuan'];
                    $harga = $_POST['harga'];
                    $stok = $_POST['stok'];

                    mysqli_query($koneksi, "UPDATE tbl_barang SET kode_barang='$kode_barang', nama_barang='$nama_barang', jenis_barang='$jenis_barang' , satuan='$satuan' , harga=$harga , stok=$stok where id ='$id'") or die(mysqli_error($koneksi));

                    echo "<script>alert('data berhasil diupdate.');window.location='index.php';</script>";
                }



                ?>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>