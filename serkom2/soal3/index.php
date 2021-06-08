<!DOCTYPE html>
<html>

<head>
    <title>SERKOM 2</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>

    <div class="container col-md-8 mt-4">
        <h1>DATA BARANG</h1>
        <div class="card">
            <div class="card-header bg-dark text-white ">
                <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambahkan</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jenis</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('koneksi.php');
                        $datas = mysqli_query($koneksi, "SELECT * FROM tbl_barang") or die(mysqli_error($koneksi));


                        $no = 1;
                        while ($row = mysqli_fetch_assoc($datas)) {
                        ?>

                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['kode_barang']; ?></td>
                                <td><?= $row['nama_barang']; ?></td>
                                <td><?= $row['jenis_barang']; ?></td>
                                <td><?= $row['satuan']; ?></td>
                                <td>Rp <?= $row['harga']; ?></td>
                                <td><?= $row['stok']; ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
                                </td>
                            </tr>

                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>