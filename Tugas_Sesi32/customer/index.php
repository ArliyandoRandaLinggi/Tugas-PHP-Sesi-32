<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Web CRUD Arliyando R.L</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        .action-buttons {
            text-align: left;
        }

        .action-buttons a {
            margin: 3px 3px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <!-- Tambahkan menu navigasi di sini -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="index.php">Customer</a></li>
                    <li><a href="../produk/index.php">Produk</a></li>
                    <li><a href="../pesanan/index.php">Order</a></li>
                </ul>
                <?php
                include "koneksi.php";
                $query = mysqli_query($conn, "SELECT * from customer ORDER BY id DESC");
                ?>
                <center>
                    <h1>DATA CUSTOMER </h1>
                </center>
                <a class="btn btn-info" style="margin-bottom:10px" href="tambah.php?tambah=Nama Customer"> + Tambah Customer </a>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>No</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    if (mysqli_num_rows($query) > 0) {
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                    ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $data["first_name"] ?></td>
                                <td><?php echo $data["last_name"] ?></td>
                                <td><?php echo $data["email"] ?></td>
                                <td><?php echo $data["phone"] ?></td>
                                <td><?php echo $data["created_at"] ?></td>
                                <td><?php echo $data["updated_at"] ?></td>
                                <td class="action-buttons">
                                    <a href="edit.php?id=<?php echo $data["id"] ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="proses_hapus.php?id=<?php echo $data["id"] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus data?');">Delete</a>
                                </td>
                            </tr>
                    <?php
                            $no++;
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</html>