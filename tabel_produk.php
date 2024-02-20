<div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
            <div class="text-center">
                <h1>Data Produk</h1>
                <li class="nav-item"><a class="nav-link" href="tambah_produk.php">Tambah Data</a></li>
                <form action="" method="post">
                    Cari berdasarkan
                    <select name="pilih">
                        <option value="produk_id">produk_id</option>
                        <option value="nama_produk">nama_produk</option>
                        <option value="harga">harga</option>
                        <option value="stok">stok</option>
                    </select>
                    <input type="text" name="tekscari" size="24">
                    <input type="submit" name="cari" value="Cari">
                    <input type="submit" name="semua" value="Tampilkan Semua">
                </form>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Id Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                include "koneksi.php";
                $tampil = "";
                if (isset($_POST['cari'])) {
                    $pilih = $_POST['pilih'];
                    $tekscari = $_POST['tekscari'];
                    $tampil = mysqli_query($koneksi, "select * from produk where $pilih like '%$tekscari%'");
                } else {
                     $tampil = mysqli_query($koneksi, "select * from produk");
                }
                foreach ($tampil as $row) {
                ?>
                    <tr>
                        <td><?php echo "$row[produk_id]"; ?></td>
                        <td><?php echo "$row[nama_produk]"; ?></td>
                        <td><?php echo "$row[harga]"; ?></td>
                        <td><?php echo "$row[stok]"; ?></td>
                        <td><?php echo "<a href='updateproduk.php?id=$row[produk_id]'>UPDATE</a> | <a href='deleteproduk.php?id=$row[deletebarang]'>DELETE</a>"; ?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
