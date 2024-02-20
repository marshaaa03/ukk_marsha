<div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
            <div class="text-center">
                <h1>Data Penjualan</h1>
                <li class="nav-item"><a class="nav-link" href="tambah_penjualan.php">Tambah Data</a></li>
                <form action="" method="post">
                    Cari berdasarkan
                    <select name="pilih">
                        <option value="penjualan_id">penjualan_id</option>
                        <option value="tanggal_penjualan">tanggal_penjualan</option>
                        <option value="total_harga">total_harga</option>
                    </select>
                    <input type="text" name="tekscari" size="23">
                    <input type="submit" name="cari" value="Cari">
                    <input type="submit" name="semua" value="Tampilkan Semua">
                </form>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Id Penjualan</th>
                        <th>Tanggal Penjualan</th>
                        <th>Total Harga</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                include "koneksi.php";
                $tampil = "";
                if (isset($_POST['cari'])) {
                    $pilih = $_POST['pilih'];
                    $tekscari = $_POST['tekscari'];
                    $tampil = mysqli_query($koneksi, "select * from penjualan where $pilih like '%$tekscari%'");
                } else {
                     $tampil = mysqli_query($koneksi, "select * from penjualan");
                }
                foreach ($tampil as $row) {
                ?>
                    <tr>
                        <td><?php echo "$row[penjualan_id]"; ?></td>
                        <td><?php echo "$row[tanggal_penjualan]"; ?></td>
                        <td><?php echo "$row[total_harga]"; ?></td>
                        <td><?php echo "<a href='updateproduk.php?id=$row[penjualan_id]'>UPDATE</a> | <a href='deleteproduk.php?id=$row[penjualan_id]'>DELETE</a>"; ?>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
